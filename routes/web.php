<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['register'=>false]);

Route::get('/', 'HomeController@index')->name('home');
Route::get('/passport', 'HomeController@passport')->name('passport');
Route::get('/home', function (){

    return redirect('/');
})->name('home-redirect');

Route::group(['prefix'=>'/admin'],function (\Illuminate\Routing\Router $router) {

    //BLOCK USERS ADMIN
    $router->get('/', "Admin\\AdminController@index")
        ->name('admin.admin.index');

    $router->get('/profile', 'Admin\\ProfileController@profile')
        ->name('admin.auth.profile.index');

    $router->post('/profile', 'Admin\\ProfileController@store')
        ->name('admin.auth.profile.store');

    $router->get('/empresa', 'Admin\\SettingController@setting')
        ->name('admin.settings.setting')->middleware('can:admin.settings.show');

    $router->post('/empresa', 'Admin\\SettingController@store')
        ->name('admin.settings.store')->middleware('can:admin.settings.store');

    \App\Suports\AutoRoute\Facade\AutoRoute::register();

});

