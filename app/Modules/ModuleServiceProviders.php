<?php


namespace App\Modules;


use App\Modules\Blog\Providers\BlogServiceProvider;
use App\Modules\Finances\Providers\FinanceServiceProvider;
use App\Modules\Services\Providers\ServiceServiceProvider;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProviders extends ServiceProvider
{


    public function boot()
    {

    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->loadProviders();
    }

    /**
     * Load our migration files.
     *
     * @return void
     */
    protected function loadProviders()
    {
        $this->app->register(BlogServiceProvider::class);
        $this->app->register(FinanceServiceProvider::class);
        $this->app->register(ServiceServiceProvider::class);
    }
}
