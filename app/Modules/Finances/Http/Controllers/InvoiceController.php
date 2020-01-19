<?php


namespace App\Modules\Finances\Http\Controllers;


use App\Http\Controllers\Admin\AbstractController;
use App\Modules\Finances\Events\InvoiceEvent;
use App\Modules\Finances\Forms\InvoiceForm;
use App\Modules\Finances\Http\Requests\InvoiceStore;
use App\Modules\Finances\Invoice;

class InvoiceController extends AbstractController
{


    protected $model = Invoice::class;

    protected $formClass = InvoiceForm::class;

    protected $events = InvoiceEvent::class;

    protected $template = "invoices";

    public function store(InvoiceStore $request)
    {
        return parent::save($request);
    }
}
