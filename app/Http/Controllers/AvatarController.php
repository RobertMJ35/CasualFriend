<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Avatar;
use App\Models\MyAvatar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AvatarController extends Controller
{
    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }

    public function avatarPage(){
        $this->setLang();
        // $myAvatar = MyAvatar::all();
        $myAvatar = MyAvatar::where('userId', Auth::user()->id)->get();
        $avatar = Avatar::all();
        $user = User::find(Auth::user()->id);
        // $avatar = Avatar::where('id', MyAvatar::where('userId', '!=', Auth::user()->id))->get();

        return view('avatar', ['avatar' => $avatar, 'myAvatar' => $myAvatar, 'coin' => $user->coin]);
    }

    public function buyAvatar(Request $request){
        $this->setLang();
        $user = User::find(Auth::user()->id);
        $avatar = Avatar::find($request->avatarId);

        if($avatar->price > $user->coin){
            return redirect()->route('avatar')->withToastError('Not Enough Coins!');
        }

        User::where('id', Auth::user()->id)->update([
            'coin' => $user->coin - $avatar->price
        ]);

        MyAvatar::create([
            'userId' => $user->id,
            'avatarId' => $avatar->id,
        ]);

        return redirect()->route('avatar')->withToastSuccess('Purchased Successfully');
    }
}
