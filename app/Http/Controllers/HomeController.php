<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AbstractController;

class HomeController  extends AbstractController
{


    public function passport(){

        return view('passport');
    }
}
