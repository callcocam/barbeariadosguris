<?php


namespace App\Suports;

use Alexusmai\LaravelFileManager\FileManagerServiceProvider;
use App\Suports\Activitylog\ActivitylogServiceProvider;
use App\Suports\AutoRoute\AutoRouteDbServiceProvider;
use App\Suports\Categorizable\Providers\CategorizableServiceProvider;
use App\Suports\Nestedset\NestedSetServiceProvider;
use App\Suports\Notify\NotifyServiceProvider;
use App\Suports\Shinobi\ShinobiServiceProvider;
use App\Suports\Tagging\Providers\TaggingServiceProvider;
use Illuminate\Support\ServiceProvider;
use Tymon\JWTAuth\Providers\LaravelServiceProvider;

class SuportServiceProviders extends ServiceProvider
{


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
        $this->app->register(ShinobiServiceProvider::class);
        $this->app->register(NestedSetServiceProvider::class);
        $this->app->register(ActivitylogServiceProvider::class);
        $this->app->register(NotifyServiceProvider::class);
        $this->app->register(CategorizableServiceProvider::class);
        $this->app->register(TaggingServiceProvider::class);
        $this->app->register(AutoRouteDbServiceProvider::class);
        $this->app->register(LaravelServiceProvider::class);
        //$this->app->register(FileManagerServiceProvider::class);
    }
}
