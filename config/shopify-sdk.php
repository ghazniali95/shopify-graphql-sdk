<?php

return [
    'api_key' => env('SHOPIFY_API_KEY', ''),
    'api_secret' => env('SHOPIFY_API_SECRET', ''),
    'redirect_uri' => env('SHOPIFY_REDIRECT_URI', ''),
    'scopes' => env('SHOPIFY_SCOPES', 'read_products,write_products'),
    'webhooks' => [
        'orders/create' => \Ghazniali95\ShopifyGraphqlSdk\Handlers\OrderCreateWebhook::class,
        'products/update' => \Ghazniali95\ShopifyGraphqlSdk\Handlers\ProductUpdateWebhook::class,
    ]
];