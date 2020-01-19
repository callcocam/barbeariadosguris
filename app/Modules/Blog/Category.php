<?php


namespace App\Modules\Blog;


use App\AbstractModel;

class Category extends AbstractModel
{

    protected $fillable = [
        'user_id','name', 'slug', 'description','status','created_at','updated_at', 'parent_id',
    ];

    public function posts(){

        return $this->hasMany(Post::class);
    }
}
