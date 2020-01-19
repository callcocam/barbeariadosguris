<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */

namespace App\Suports\AutoRoute\Http\Controllers;




use App\Http\Controllers\Admin\AbstractController;
use App\Suports\AutoRoute\Forms\AutoRouteForm;
use App\Suports\AutoRoute\Model\AutoRouteModel;
use Illuminate\Http\Request;

class AutoRouteController extends AbstractController
{

   protected $template = 'auto-route';

   protected $model = AutoRouteModel::class;

   protected $formClass = AutoRouteForm::class;

    /**
     * Store a newly created resource in storage.
     * @param $request
     * @return AutoRouteController
     */
    public function store(Request $request)
    {
        return $this->save($request);
    }
}
