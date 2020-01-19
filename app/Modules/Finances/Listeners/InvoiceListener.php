<?php

namespace App\Modules\Finances\Listeners;

use App\Modules\Finances\Expense;
use App\Modules\Finances\Income;
use App\Modules\Finances\Invoice;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class InvoiceListener
{
    /**
     * @var Income
     */
    private $income;
    /**
     * @var Expense
     */
    private $expense;
    /**
     * @var Invoice
     */
    private $invoice;

    /**
     * Create the event listener.
     *
     * @param Income $income
     * @param Expense $expense
     */
    public function __construct(Income $income, Expense $expense)
    {
        //
        $this->income = $income;
        $this->expense = $expense;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $this->invoice = $event->invoice;

        if($this->invoice->type == 'income'):

            $this->setIncome($this->income);

        endif;

        if($this->invoice->type == 'expense'):

            $this->setExpense($this->expense);

        endif;
    }

    /**
     * @param Income $income
     */
    public function setIncome(Income $income): void
    {

        $incomes = $this->invoice->incomes()->get();



        for ($i=0;$i< $this->invoice->enrollments; $i++){

            $enrollment = ($i+1);

            $incomes = $this->invoice->incomes()->where('enrollment', $enrollment)->first();

            $data = [];

            if($incomes){

                $data['id']=$incomes->id;
            }

            $data['invoice_id']=$this->invoice->id;
            $data['enrollment']=$enrollment;
            $data['price']=form_w(Calcular(form_read($this->invoice->price), $this->invoice->enrollments, '/'));
            $data['discount']='0';
            $data['affix']='0';
            $data['total']=form_w(Calcular(form_read($this->invoice->price), $this->invoice->enrollments, '/'));
            $data['payment_up']=$this->invoice->created_at->addMonth($i)->format('Y-m-d');
            $data['payment_down']=null;
            $data['description']='';
            $data['status']=$this->invoice->status;
            $data['created_at']=$this->invoice->created_at->format('Y-m-d');
            $data['updated_at']=$this->invoice->created_at->format('Y-m-d');
            $income->saveBy($data);

            if(!$income->getResultLastId()){
               notify($income->getMessage(),'error','OPPSS!!');
            }
        }
    }

    /**
     * @param Expense $expense
     */
    public function setExpense(Expense $expense): void
    {

        for ($i=0;$i<= $this->invoice->enrollments; $i++){

            $enrollment = ($i+1);

            $expenses = $this->invoice->expenses()->where('enrollment', $enrollment)->first();

            $data = [];

            if($expenses){

                $data['id']=$expenses->id;
            }

            $data['invoice_id']=$this->invoice->id;
            $data['enrollment']=$enrollment;
            $data['price']=form_w(Calcular(form_read($this->invoice->price), $this->invoice->enrollments, '/'));
            $data['discount']='0';
            $data['affix']='0';
            $data['total']=form_w(Calcular(form_read($this->invoice->price), $this->invoice->enrollments, '/'));
            $data['payment_up']=$this->invoice->created_at->addMonth($i)->format('Y-m-d');
            $data['payment_down']=null;
            $data['description']='';
            $data['status']=$this->invoice->status;
            $data['created_at']=$this->invoice->created_at->format('Y-m-d');
            $data['updated_at']=$this->invoice->created_at->format('Y-m-d');
            $expense->saveBy($data);

            if(!$expense->getResultLastId()){
                notify($expense->getMessage(),'error','OPPSS!!');
            }
        }
    }
}
