<?php

namespace App\Modules\Services\Forms;

use App\AbstractForm;

class ServiceForm extends AbstractForm
{
    public function buildForm()
    {
        if($this->getModel()){
            $this->add('id', 'hidden');
        }

        $this->add('slug', 'hidden')
            ->add('name', 'text',[
                'label'=>'Nome'
            ])->addDescription()
            ->getStatus()
            ->addSubmit();

        parent::buildForm();
    }

}
