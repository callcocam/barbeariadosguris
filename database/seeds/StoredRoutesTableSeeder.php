<?php

use Illuminate\Database\Seeder;

class StoredRoutesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stored_routes = [
             [
                 'uuid' => \Illuminate\Support\Str::uuid(),
                 'company_id' => get_tenant_id(),
                 'verb' => 'get', // get, post, put, delete, any
                 'prefix' => 'admin', // http://something/Sample/index
                 'name' => 'Auto Route', // Nome da rota
                 'slug' => 'auto-route', // Nome da rota
                 'namespace' => 'auto-route', // namespace da rota
                 'route' => 'auto-route', // Pattern é parte da URI, como se vê acima
                 'pattern' => '', // Pattern é parte da URI, como se vê acima
                 'controller' => 'Admin\\AutoRouteController', // Nome do controller
                 'method' => null, // Método no controller
                 'resource' => true, // Este deve ser verdadeiro apenas para recursos
                 'created_at' => date("Y-m-d"),
                 'updated_at' => date("Y-m-d"),
             ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'get', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Translate', // Nome da rota
                'slug' => 'tradutor', // Nome da rota
                'namespace' => 'admin', // namespace da rota
                'route' => 'translate', // Pattern é parte da URI, como se vê acima
                'pattern' => '', // Pattern é parte da URI, como se vê acima
                'controller' => 'Admin\\TradutorController', // Nome do controller
                'method' => "index", // Método no controller
                'resource' => false, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],

            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'get', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Settings', // Nome da rota
                'slug' => 'empresa', // Nome da rota
                'namespace' => 'admin', // namespace da rota
                'route' => 'admin.settings.show', // Nome da rota completo
                'pattern' => '{id}/show', // Pattern é parte da URI, como se vê acima
                'controller' => 'Admin\\SettingController', // Nome do controller
                'method' => "show", // Método no controller
                'resource' => false, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'post', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Settings', // Nome da rota
                'slug' => 'empresa', // Nome da rota
                'namespace' => 'admin', // namespace da rota
                'route' => 'admin.settings.store', // Nome da rota completo
                'pattern' => 'store', // Pattern é parte da URI, como se vê acima
                'controller' => 'Admin\\SettingController', // Nome do controller
                'method' => "store", // Método no controller
                'resource' => false, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'get', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Roles', // Nome da rota
                'slug' => 'roles', // Nome da rota
                'namespace' => 'shinobi', // namespace da rota
                'route' => 'roles', // Nome da rota completo
                'pattern' => '', // Pattern é parte da URI, como se vê acima
                'controller' => 'RoleController', // Nome do controller
                'method' => null, // Método no controller
                'resource' => true, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'get', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Permissions', // Nome da rota
                'slug' => 'permissioes', // Nome da rota
                'namespace' => 'shinobi', // namespace da rota
                'route' => 'permissions', // Nome da rota completo
                'pattern' => '', // Pattern é parte da URI, como se vê acima
                'controller' => 'PermissionController', // Nome do controller
                'method' => null, // Método no controller
                'resource' => true, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'get', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Users', // Nome da rota
                'slug' => 'usuarios', // Nome da rota
                'namespace' => 'admin', // namespace da rota
                'route' => 'users', // Nome da rota completo
                'pattern' => '', // Pattern é parte da URI, como se vê acima
                'controller' => 'Admin\\UserController', // Nome do controller
                'method' => null, // Método no controller
                'resource' => true, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'get', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Categorias', // Nome da rota
                'slug' => 'categorias', // Nome da rota
                'namespace' => 'admin', // namespace da rota
                'route' => 'categories', // Nome da rota completo
                'pattern' => '', // Pattern é parte da URI, como se vê acima
                'controller' => 'CategoryController', // Nome do controller
                'method' => null, // Método no controller
                'resource' => true, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],

            [
                'uuid' => \Illuminate\Support\Str::uuid(),
                'company_id' => get_tenant_id(),
                'verb' => 'get', // get, post, put, delete, any
                'prefix' => 'admin', // http://something/Sample/index
                'name' => 'Posts', // Nome da rota
                'slug' => 'posts', // Nome da rota
                'namespace' => 'admin', // namespace da rota
                'route' => 'posts', // Nome da rota completo
                'pattern' => '', // Pattern é parte da URI, como se vê acima
                'controller' => 'PostController', // Nome do controller
                'method' => null, // Método no controller
                'resource' => true, // Este deve ser verdadeiro apenas para recursos
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
            ],
        ];
        foreach ($stored_routes as $row) {
            \App\Suports\AutoRoute\Model\AutoRouteModel::create($row);
        }
    }
}
