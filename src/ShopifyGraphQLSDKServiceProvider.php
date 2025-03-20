<?php

namespace Ghazniali95\ShopifyGraphqlSdk;

use Illuminate\Support\ServiceProvider;

class ShopifyGraphQLSDKServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        // Merge package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/shopify-sdk.php', 'shopify-sdk');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publish configuration file
        $this->publishes([
            __DIR__ . '/../config/shopify-sdk.php' => config_path('shopify-sdk.php'),
        ], 'shopify-sdk-config');

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}