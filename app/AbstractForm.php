<?php

/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com
 * https://www.sigasmart.com.br
 */


namespace App;


use App\Suports\Shinobi\Models\Permission;
use App\Suports\Shinobi\Models\Role;
use Kris\LaravelFormBuilder\Form;

abstract class AbstractForm extends Form
{
    /**
     * @var Permission
     */
    protected $permission;
    /**
     * @var Role
     */
    protected $role;

    public function buildForm()
    {


    }
    protected function getStatus($published="Publicado", $draft="Rascunho"){

        return $this->add('status', 'choice',[
            'choices'=>[
                'published'=>$published,
                'draft'=>$draft,
            ],
            'label'=>'Situação',
            'expanded'=>true,
        ]);

    }
    protected function addDescription(){

        return $this->add('description', 'textarea', [
            'label'=>'Descrição'
        ]);

    }

    protected function addCover($name="cover"){

        return $this->add($name, 'cover', [
            'label'=>'Selecione Um Capa',
            'for'=>$name,
            'attr'=>[
                'id'=>'image_label',
            ],
            'label_attr_addon'=>[
                "aria-describedby"=>sprintf("input-group-file-sddon-01", $name),
                "id"=>"button-image",
                "class"=>"custom-file-label",
                "for"=>'image_label'
            ]
        ]);

    }

    protected function addSubmit($label = "Salvar Dados", $options = [], $attr = []){

        return  $this->add('submit', 'submit', array_merge(
            [
                'label' => $label,
                'attr'=>array_merge([
                    'class'=>'btn btn-primary btn-block'
                ], $attr)]
            , $options));

    }

}
/* ->add('languages', 'entity', [
                'class' => Permission::class,
                //'property' => 'name',
                //'property_key ' => 'id',
                'query_builder' => function (Permission $permission) {
                    // If query builder option is not provided, all data is fetched
                    return $permission->where('status', 'published');
                }
            ])*/
