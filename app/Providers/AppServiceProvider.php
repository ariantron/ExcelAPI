<?php

namespace App\Providers;

use App\Facades\ReportFacade;
use App\Interfaces\IReportService;
use App\Services\ReportService;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }

        $this->app->bind(IReportService::class, ReportService::class);
        AliasLoader::getInstance()->alias('ReportService', ReportFacade::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
