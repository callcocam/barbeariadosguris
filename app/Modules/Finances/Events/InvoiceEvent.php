<?php

namespace App\Modules\Finances\Events;

use App\AbstractEvent;
use App\Modules\Finances\Invoice;


class InvoiceEvent extends AbstractEvent
{
    /**
     * @var Invoice
     */
    public $invoice;


    /**
     * Create a new event instance.
     *
     * @param Invoice $invoice
     */
    public function __construct(Invoice $invoice)
    {
        //
        $this->invoice = $invoice;
    }


    public function setHandler($handler)
    {
        // TODO: Implement setHandler() method.
    }
}
