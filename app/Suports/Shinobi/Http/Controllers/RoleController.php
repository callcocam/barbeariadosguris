<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Suports\Shinobi\Http\Controllers;


use App\Http\Controllers\Admin\AbstractController;
use App\Http\Requests\RoleStore;
use App\Suports\Shinobi\Forms\RoleForm;
use App\Suports\Shinobi\Models\Role;
use Illuminate\Http\Request;

class RoleController extends AbstractController
{

   protected $template = 'roles';

   protected $model = Role::class;


   protected $formClass = RoleForm::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param RoleStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleStore $request)
    {

        return $this->save($request);
    }

}
