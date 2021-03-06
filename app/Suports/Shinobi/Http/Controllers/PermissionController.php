<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Suports\Shinobi\Http\Controllers;


use App\Http\Controllers\Admin\AbstractController;
use App\Http\Requests\PermisionStore;
use App\Suports\Shinobi\Forms\PermissionForm;
use App\Suports\Shinobi\Models\Permission;

class PermissionController extends AbstractController
{

   protected $template = 'permissions';

   protected $model = Permission::class;

  protected $formClass = PermissionForm::class;

    /**
     * Store a newly created resource in storage.
     *
     * @param PermisionStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermisionStore $request)
    {
        return $this->save($request);
    }
}
