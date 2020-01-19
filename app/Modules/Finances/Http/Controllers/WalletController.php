<?php


namespace App\Modules\Finances\Http\Controllers;


use App\Http\Controllers\Admin\AbstractController;
use App\Modules\Finances\Forms\WalletForm;
use App\Modules\Finances\Http\Requests\WalletStore;
use App\Modules\Finances\Wallet;

class WalletController extends AbstractController
{


    protected $model = Wallet::class;

    protected $formClass = WalletForm::class;

    protected $template = "wallets";

    public function store(WalletStore $request)
    {
        return parent::save($request);
    }
}
