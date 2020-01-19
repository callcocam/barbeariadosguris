<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Suports\Categorizable\Providers;

use App\Suports\Categorizable\Models\Category;
use Illuminate\Support\ServiceProvider;

class CategorizableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(
            __DIR__.'/../database/migrations'
        );

    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/categorizable.php', 'categorizable');


    }

}
