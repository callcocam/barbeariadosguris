<?php


namespace App\Modules\Finances\Providers;


use Illuminate\Support\ServiceProvider;

class FinanceServiceProvider extends ServiceProvider
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
        $this->loadMigrations();
    }

    /**
     * Load our migration files.
     *
     * @return void
     */
    protected function loadProviders()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Load our migration files.
     *
     * @return void
     */
    protected function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
    }
}
