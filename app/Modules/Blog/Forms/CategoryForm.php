<?php

namespace App\Modules\Blog\Forms;

use App\AbstractForm;
use App\Suports\Shinobi\Models\Role;
use Illuminate\Validation\Rule;

class CategoryForm extends AbstractForm
{
    public function buildForm()
    {
        if($this->getModel()){
            $this->add('id', 'hidden');
        }

        $this->add('slug', 'hidden')
            ->add('name', 'text',[
                'label'=>'Nome',
                'rules' => 'required',
            ])->addDescription()
            ->getStatus()
            ->addSubmit();

        parent::buildForm();
    }

}
