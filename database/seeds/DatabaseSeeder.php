<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        factory(\App\Model\Admin\Company::class, 1)->create()->each(function ($company){

            $company->address()->save(factory(\App\Model\Admin\Addres::class)->make());

            factory(\App\Suports\Shinobi\Models\Role::class)->create([
                'company_id'=>$company->id,
                'name'=>'Super Admin',
                'slug'=>'super-admin',
                'special'=>'all-access',
                'description'=>'Acesso total no sistema',
            ]);
            factory(\App\Suports\Shinobi\Models\Role::class)->create([
                'company_id'=>$company->id,
                'name'=>'Editor',
                'slug'=>'editor',
                'special'=>null,
                'description'=>'Consegue fazer todas as operações no sistema',
            ]);
            factory(\App\Suports\Shinobi\Models\Role::class)->create([
                'company_id'=>$company->id,
                'name'=>'Cliente ',
                'slug'=>'cliente ',
                'special'=>null,
                'description'=>'Consegue fazer pedidos, acompanhar pedidos',
            ]);


            factory(\App\Model\Admin\User::class)->create(
                [
                    'name' => "CLAUDIO CAMPOS",
                    'slug' => "claudio-campos",
                    'email' => "contato@sigasmart.com.br",
                    'phone' => "(48)99680-1064",
                    'document' => "01728422981",
                    'birthday' => "1976-09-15",
                    'is_admin' => true,
                    'description' => "Administrador geral do sistema"
                ]
            )->each(function ($user) use ($company){

                $user->address()->save(factory(\App\Model\Admin\Addres::class)->make());

                $user->file()->save(factory(\App\Model\Admin\File::class)->make());

                $role  = \App\Suports\Shinobi\Models\Role::query()->where('special','all-access')->first();

                if($role){
                    $user->roles()->sync($role);
                }

            });

            factory(\App\Model\Admin\User::class)->create(
                [
                    'name' => "CINTIA PACHECO",
                    'slug' => "cintia-pacheco",
                    'email' => "cintia@barbeariadosguris.com.br",
                    'phone' => "(51)98234-5135",
                    'document' => null,
                    'birthday' => "1995-04-16",
                    'is_admin' => true,
                    'description' => "Editor do sistema"
                ]
            )->each(function ($user) use ($company){

                $user->address()->save(factory(\App\Model\Admin\Addres::class)->make());

                $user->file()->save(factory(\App\Model\Admin\File::class)->make());

                $role  = \App\Suports\Shinobi\Models\Role::query()->where('slug','editor')->first();

                if($role){
                    $user->roles()->sync($role);
                }

            });

            factory(\App\Model\Admin\User::class)->create(
                [
                    'name' => "ALESSANDRO CAMPOS",
                    'slug' => "alessandro-campos",
                    'email' => "alessandro@barbeariadosguris.com.br",
                    'phone' => "(48)99680-1064",
                    'document' => null,
                    'birthday' => "2000-09-18",
                    'is_admin' => true,
                    'description' => "Editor do sistema"
                ]
            )->each(function ($user) use ($company){

                $user->address()->save(factory(\App\Model\Admin\Addres::class)->make());

                $user->file()->save(factory(\App\Model\Admin\File::class)->make());

                $role  = \App\Suports\Shinobi\Models\Role::query()->where('slug','editor')->first();

                if($role){
                    $user->roles()->sync($role);
                }

            });


            factory(\App\Model\Admin\User::class)->create(
                [
                    'name' => "ADRIANO PACHECO",
                    'slug' => "adriano-pacheco",
                    'email' => "adriano@barbeariadosguris.com.br",
                    'phone' => "(48)99680-1064",
                    'document' => null,
                    'birthday' => "1992-01-01",
                    'is_admin' => true,
                    'description' => "Editor do sistema"
                ]
            )->each(function ($user) use ($company){

                $user->address()->save(factory(\App\Model\Admin\Addres::class)->make());

                $user->file()->save(factory(\App\Model\Admin\File::class)->make());

                $role  = \App\Suports\Shinobi\Models\Role::query()->where('slug','editor')->first();

                if($role){
                    $user->roles()->sync($role);
                }

            });

        });

        $this->call(StoredRoutesTableSeeder::class);

    }
}
