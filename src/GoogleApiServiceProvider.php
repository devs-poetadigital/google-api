<?php

namespace GoogleApi;

use GoogleApi\Services\PlaceApi\PlaceApi;
use Illuminate\Support\ServiceProvider;

class GoogleApiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/google-api.php' => config_path('google-api.php'),
        ],'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__.'/../config/google-api.php';
        $this->mergeConfigFrom($configPath, 'google-api');

        $this->app->bind(IPlaceApi::class, PlaceApi::class);

        $this->app->singleton(GoogleApiManager::class, function ($app) {
            return new GoogleApiManager(
                $app->make(PlaceApi::class)
            );
        });

        $this->app->singleton('google_api', function () {
            return $this->app->make(GoogleApiManager::class);
        });
    }
}
