<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Model\Admin\User::class, function (Faker $faker) {
    return [
        'company_id' => get_tenant_id(),
        'user_id' => null,
        'uuid' => Str::uuid(),
        'password' => \Illuminate\Support\Facades\Hash::make('password'), // password
        'remember_token' => Str::random(10),
    ];
});
