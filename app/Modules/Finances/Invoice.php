<?php


namespace App\Modules\Finances;


use App\AbstractModel;
use App\Model\Admin\Client;

class Invoice extends AbstractModel
{

    protected $fillable = [
        'client_id','wallet_id','type','period','currency','enrollments','price', 'description','status','created_at','updated_at',
    ];

    public function client(){

        return $this->belongsTo(Client::class)->first();
    }

    public function expenses(){

        return $this->belongsToMany(Expense::class);
    }


    public function incomes(){

        return $this->hasMany(Income::class);
    }
}
