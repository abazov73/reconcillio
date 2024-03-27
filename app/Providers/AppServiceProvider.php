<?php

namespace App\Providers;

use App\Services\Reconcillio\Invoice\InvoiceService;
use App\Services\Reconcillio\Invoice\InvoiceServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            InvoiceServiceInterface::class,
            InvoiceService::class,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
