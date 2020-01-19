<?php


namespace App\Modules\Blog;


use App\AbstractModel;
use App\Model\Admin\User;

class Comment extends AbstractModel
{
    public function commentable(){

        return $this->morphTo();
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
