<?php

namespace App\Forms\Auth;

use App\AbstractForm;

class LoginForm extends AbstractForm
{
    public function buildForm()
    {

        $this->add('email', 'email',[
            'template' => 'laravel-form-builder::text-inline',
            'label_show'=>false
        ])
            ->add('password', 'password',[
                'template' => 'laravel-form-builder::text-inline',
                'label_show'=>false
            ])
            ->addSubmit("Iniciar Sessão",[
                'template' => 'laravel-form-builder::button-inline'
            ]);

        parent::buildForm();
    }


}
