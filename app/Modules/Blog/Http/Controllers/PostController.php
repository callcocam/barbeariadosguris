<?php


namespace App\Modules\Blog\Http\Controllers;


use App\Http\Controllers\Admin\AbstractController;
use App\Modules\Blog\Forms\PostForm;
use App\Modules\Blog\Http\Requests\PostStore;
use App\Modules\Blog\Post;

class PostController extends AbstractController
{


    protected $model = Post::class;

    protected $formClass = PostForm::class;

    protected $template = "posts";

    public function store(PostStore $request)
    {
        return parent::save($request);
    }
}
