<?php

namespace App\Forms;

use App\AbstractForm;
use App\Suports\Shinobi\Models\Role;
use Illuminate\Validation\Rule;

class UserForm extends AbstractForm
{
    public function buildForm()
    {
        if($this->getModel()){
            $this->add('id', 'hidden');
        }

        $this->add('is_admin', 'hidden', [
            'value'=>'1'
        ])
            ->add('slug', 'hidden')
            ->add('name', 'text',[
                'label'=>'Nome',
                'rules' => 'required',
            ])
            ->add('email', 'email',[
                'label'=>'E-Mail',
                'rules' => [
                    'required',
                    Rule::unique('users','email')->ignore($this->getData('id'))
                ],
            ])
            ->addPassword()
            ->add('phone', 'tel',[
                'label'=>'Telefone'
            ])
            ->add('document', 'text',[
                'label'=>'Cpf/Cnpj'
            ])
            ->addRoles()
            ->add('address', 'form', [
                'label_attr' => ['class' => 'footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center'],
                'class' => $this->formBuilder->create(AddresForm::class),
                'wrapper' => false,
                'wrapper_class' => false,
                'label'=>'Endereço'
            ])
            ->addDescription()
            ->getStatus("Ativo", "Inativo")
            ->addSubmit();

        parent::buildForm();
    }

    protected function addRoles(){

        if(!$this->getModel()){
            return  $this;
        }

        $roles = $this->getModel()->roles()->get();

        $data = [];

        $map = $roles->map(function($items){
            $data = $items->id;
            return $data;
        });

        if($map){
            $data = $map->toArray();
        }
        return  $this->add('role', 'entity', [
            'class' => Role::class,
            'selected' => $data,
            //'property' => 'name',
            //'property_key ' => 'id',
            'multiple'=>true,
            'expanded'=>true,
        ]);

    }
    protected function addPassword(){

        if($this->getModel()){
            return  $this;
        }

        return  $this->add('password', 'password',[
            'label'=>'Senha'
        ]);

    }
}
