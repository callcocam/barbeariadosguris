<?php


namespace App\Modules\Blog\Http\Controllers;


use App\Http\Controllers\Admin\AbstractController;
use App\Modules\Blog\Category;
use App\Modules\Blog\Forms\CategoryForm;
use App\Modules\Blog\Http\Requests\CategoryStore;

class CategoryController extends AbstractController
{


    protected $model = Category::class;

    protected $formClass = CategoryForm::class;

    protected $template = "categories";

    public function store(CategoryStore $request)
    {
        return parent::save($request);
    }
}
