<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class ChatDetailController extends Controller
{
    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }
}
