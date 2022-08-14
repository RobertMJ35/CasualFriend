<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MyAvatarController extends Controller
{
    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }


}
