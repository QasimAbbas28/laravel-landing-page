<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('welcome', function($view){
            $view->with('g_company_name', \App\SystemConfig::companyname()[0]['value']);
            $view->with('g_company_slogan', \App\SystemConfig::companyslogan()[1]['value']);
            $view->with('g_company_logo', \App\SystemConfig::companylogo()[2]['value']);
            $view->with('g_company_location', \App\SystemConfig::companylocation()[3]['value']);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
