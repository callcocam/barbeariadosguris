<?php


namespace App\Modules\Finances;


use App\AbstractModel;
use App\Model\Admin\Client;

class Income extends AbstractModel
{

    protected $fillable = [
        'invoice_id','enrollment','price','discount','affix','total','payment_up','payment_down','description','status','created_at','updated_at',
    ];

    public function invoices(){

        return $this->belongsTo(Invoice::class)->first();
    }
}
