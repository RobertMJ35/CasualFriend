<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\MyAvatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class AvatarController extends Controller
{
    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }

    public function avatarPage(){
        $this->setLang();
        $avatar = Avatar::all();
        $myAvatar = MyAvatar::all();

        return view('avatar', ['avatar' => $avatar, 'myAvatar' => $myAvatar]);
    }

    public function buyAvatar(){
        $this->setLang();
        $avatar = Avatar::all();
        $myAvatar = MyAvatar::all();

        return view('avatar', ['avatar' => $avatar, 'myAvatar' => $myAvatar]);
    }
}
