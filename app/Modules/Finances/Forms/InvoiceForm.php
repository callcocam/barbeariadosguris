<?php

namespace App\Modules\Finances\Forms;

use App\AbstractForm;
use App\Model\Admin\Client;
use App\Modules\Finances\Wallet;

class InvoiceForm extends AbstractForm
{
    public function buildForm()
    {
        if($this->getModel()){
            $this->add('id', 'hidden');
        }

        $this->add('wallet_id','entity', [
                'class' => Wallet::class,
                'empty_value' => '=== Selecione ==='
                //'property' => 'name',
                //'property_key ' => 'id',
                //'multiple'=>true,
                //'expanded'=>true,
            ]) ->add('client_id','entity', [
                'class' => Client::class,
                'empty_value' => '=== Selecione ==='
                //'property' => 'name',
                //'property_key ' => 'id',
                //'multiple'=>true,
                //'expanded'=>true,
            ])->add('type', 'choice',[
                'choices'=>[
                    'income'=>"Receita",
                    'expense'=>"Despesa"
                ],
                'label'=>'Situação',
                'expanded'=>true,
            ])->add('enrollments', 'text')->add('price', 'text')
            ->add('period', 'choice',[
                'choices'=>[
                    'month'=>"Mensal",
                    'year'=>"Anual"
                ],
                'label'=>'Situação',
                'expanded'=>true,
            ]) ->add('currency', 'text',[
                'value'=>'BRL'
            ])->addDescription()
            ->getStatus()
            ->addSubmit();

        parent::buildForm();
    }

}
