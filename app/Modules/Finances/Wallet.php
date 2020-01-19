<?php


namespace App\Modules\Finances;


use App\AbstractModel;

class Wallet extends AbstractModel
{

    protected $fillable = [
        'user_id','name', 'slug', 'description','status','created_at','updated_at', 'parent_id',
    ];

}
