<?php


namespace App\Modules\Services;


use App\AbstractModel;

class Service extends AbstractModel
{

    protected $fillable = [
        'user_id','name', 'slug', 'description','status','created_at','updated_at', 'parent_id',
    ];

}
