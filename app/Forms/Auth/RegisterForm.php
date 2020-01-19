<?php

namespace App\Forms\Auth;

use App\AbstractForm;

class RegisterForm extends AbstractForm
{
    public function buildForm()
    {

        $this->add('name', 'text',[
            'template' => 'laravel-form-builder::text-inline',
            'label_show'=>false
        ])->add('email', 'email',[
            'template' => 'laravel-form-builder::text-inline',
            'label_show'=>false
        ])
            ->add('password', 'password',[
                'template' => 'laravel-form-builder::text-inline',
                'label_show'=>false
            ])->add('password_confirmation', 'password',[
                'template' => 'laravel-form-builder::text-inline',
                'label_show'=>false
            ])
            ->addSubmit('Register',[
                'template' => 'laravel-form-builder::button-inline'
            ]);

        parent::buildForm();
    }


}
