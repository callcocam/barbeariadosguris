<?php


namespace App\Modules\Services\Http\Controllers;


use App\Http\Controllers\Admin\AbstractController;
use App\Modules\Services\Http\Requests\ServiceStore;
use App\Modules\Services\Forms\ServiceForm;
use App\Modules\Services\Service;


class ServiceController extends AbstractController
{


    protected $model = Service::class;

    protected $formClass = ServiceForm::class;

    protected $template = "services";

    public function store(ServiceStore $request)
    {
        return parent::save($request);
    }
}
