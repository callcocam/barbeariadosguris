<?php

namespace App\Modules\Blog\Forms;

use App\AbstractForm;
use App\Modules\Blog\Category;

class PostForm extends AbstractForm
{
    public function buildForm()
    {
        if($this->getModel()){
            $this->add('id', 'hidden');
        }

        $this->add('slug', 'hidden')
            ->add('name', 'text',[
                'label'=>'Nome'
            ])
            ->add('subtitle', 'text',[
                'label'=>'Sub Tititulo'
            ])
            ->add('category','entity', [
                'class' => Category::class,
                'empty_value' => '=== Selecione ==='
                //'property' => 'name',
                //'property_key ' => 'id',
                //'multiple'=>true,
                //'expanded'=>true,
            ])
            ->add('tags', 'tags',[
                'label'=>'Sub Tititulo'
            ])
            ->addCover()
            ->addDescription()
            ->getStatus()
            ->addSubmit();

        parent::buildForm();
    }

}
