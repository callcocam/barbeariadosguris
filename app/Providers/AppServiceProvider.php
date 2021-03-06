<?php

namespace App\Providers;

use App\Modules\ModuleServiceProviders;
use App\Suports\SuportServiceProviders;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('path.public', function () {
            return base_path("public_html") ;
        });
        $this->app->register(SuportServiceProviders::class);
        $this->app->register(ModuleServiceProviders::class);

        include app_path("Suports/helpers.php");
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');

        $this->bluePrintMacros();
    }


    public function bluePrintMacros()
    {
        Blueprint::macro('tenant', function(){
            $this->unsignedBigInteger('company_id')->nullable();
            $this
                ->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Blueprint::macro('user', function($field="user_id"){
            $this->unsignedBigInteger($field)->nullable();
            $this
                ->foreign($field)
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        Blueprint::macro('status', function($status =[]){
            $this->enum('status', array_merge([  'deleted','draft','published'], $status))->default('published');
        });

    }
}
