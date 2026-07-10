<?php

namespace App\Providers;

use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            \App\Contracts\LoveThaiHomeApiClientInterface::class,
            \App\Services\LoveThaiHome\LoveThaiHomeApiClient::class,
        );

        $this->app->singleton(\App\Services\LoveThaiHome\LoveThaiHomeService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();

        $siteImage = rtrim((string) config('app.url'), '/').'/images/logo/logo.png';
        TwitterCard::setImage($siteImage);
    }
}
