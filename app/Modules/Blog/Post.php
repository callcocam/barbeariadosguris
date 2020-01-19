<?php


namespace App\Modules\Blog;


use App\AbstractModel;
use App\Suports\Tagging\Taggable;

class Post extends AbstractModel
{

    use Taggable;

    protected $fillable = [
        'user_id','author_id', 'name','subtitle', 'slug', 'views','description','status','created_at','updated_at',
    ];


    public function comments(){

        return $this->morphMany(Comment::class, 'commentable');
    }



    public function categories(){

        return $this->belongsToMany(Category::class);
    }



    public function category(){

        return $this->belongsToMany(Category::class);
    }


    public function categorie(){

        return $this->belongsToMany(Category::class);
    }
}
