<?php

namespace Ghazniali95\ShopifyGraphqlSdk\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Log;

class WebhookService
{
    /**
     * The Shopify shop URL.
     *
     * @var string
     */
    protected string $shopUrl;

    /**
     * The Shopify access token.
     *
     * @var string
     */
    protected string $accessToken;

    /**
     * Create a new WebhookService instance.
     *
     * @param string $shopUrl
     * @param string $accessToken
     */
    public function __construct(string $shopUrl, string $accessToken)
    {
        $this->shopUrl = $shopUrl;
        $this->accessToken = $accessToken;
    }

    /**
     * Register Shopify webhooks.
     *
     * @return void
     * @throws GuzzleException
     */
    public function registerWebhooks(): void
    {
        $client = new Client([
            'base_uri' => "https://{$this->shopUrl}/admin/api/2023-10/graphql.json",
            'headers' => [
                'X-Shopify-Access-Token' => $this->accessToken,
                'Content-Type' => 'application/json',
            ],
        ]);

        $webhooks = config('shopify-sdk.webhooks');

        foreach ($webhooks as $topic => $handler) {
            $query = [
                'query' => '
                    mutation webhookSubscriptionCreate($topic: WebhookSubscriptionTopic!, $webhookSubscription: WebhookSubscriptionInput!) {
                        webhookSubscriptionCreate(topic: $topic, webhookSubscription: $webhookSubscription) {
                            userErrors {
                                field
                                message
                            }
                            webhookSubscription {
                                id
                            }
                        }
                    }
                ',
                'variables' => [
                    'topic' => $topic,
                    'webhookSubscription' => [
                        'callbackUrl' => route('shopify.webhook'),
                        'format' => 'JSON',
                    ],
                ],
            ];

            try {
                $response = $client->post('', ['json' => $query]);
                $responseData = json_decode($response->getBody()->getContents(), true);

                if (!empty($responseData['errors'])) {
                    Log::error('Failed to register webhook:', [
                        'topic' => $topic,
                        'errors' => $responseData['errors'],
                    ]);
                }
            } catch (GuzzleException $e) {
                Log::error('Webhook registration failed:', [
                    'topic' => $topic,
                    'error' => $e->getMessage(),
                ]);
                throw $e;
            }
        }
    }
}