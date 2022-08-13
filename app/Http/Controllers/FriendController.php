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
        return view('friend', ['friend' => $friend]);
    }

    public function sendFriendReq(Request $request){
        Friend::create([
            'person1' => Auth::user()->id,
            'person2' => $request->user_id,
            'isFriend' => false
        ]);

        return redirect()->back()->withSuccess('Friend Request Sent!');
    }

    public function acceptFriendReq(Request $request){
        Friend::find($request->friend_id)->update([
            'isFriend' => true
        ]);

        //bikin room
        // ChatRoom::create([
        //     'friend_1' => $request->user_id,
        //     'friend_2' => Auth::user()->id,
        // ]);

        return redirect()->back()->withSuccess('Friend Request Accepted!');
    }
}
