<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function friendPage()
    {
        $this->setLang();
        $friend = Friend::all();
        return view('friend', ['friend'=>$friend]);
    }

    public function sendFriendReq(Request $request){
        Friend::create([
            'person1' => Auth::user()->id,
            'person2' => $request->id,
            'isFriends' => 0,
        ]);

        return redirect()->route('home')->withSuccess('Friend Request Sent!');
    }

    public function acceptFriendReq(Request $request){
        Friend::find($request->id)->update([
            'isFriend' => 1
        ]);

        return redirect()->back()->withSuccess('Friend Request Accepted!');
    }
}
