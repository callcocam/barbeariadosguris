<?php

namespace App\Forms\Auth;

use App\AbstractForm;

class PasswordRequestForm extends AbstractForm
{
    public function buildForm()
    {

        $this->add('email', 'email',[
            'template' => 'laravel-form-builder::text-inline',
            'label_show'=>false
        ])->addSubmit('',[
            'template' => 'laravel-form-builder::button-inline'
        ]);

        parent::buildForm();
    }


}
