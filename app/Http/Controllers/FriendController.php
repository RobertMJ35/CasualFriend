<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }

    public function friendPage()
    {
        $this->setLang();
        // $friend = DB::table('users')
        //             ->join('friend', 'users.id', '=', 'friend.person1');
        $list = Friend::all();
        return view('friend', ['list'=>$list]);
    }

    public function sendFriendReq(Request $request){
        Friend::create([
            'person1' => Auth::user()->id,
            'person2' => $request->id,
            'isFriends' => 0,
        ]);

        return redirect()->route('home')->withToastSuccess('Friend Request Sent!');
    }

    public function acceptFriendReq(Request $request){
        Friend::find($request->id)->update([
            'isFriends' => 1
        ]);

        return redirect()->back()->withToastSuccess('Friend Request Accepted!');
    }

    public function rejectFriendReq(Request $request){
        Friend::find($request->id)->delete();

        return redirect()->back()->withToastSuccess('Friend Request Rejected!');
    }

    public function createChat(Request $request){
        Chat::create([
            'person1' => Auth::user()->id,
            'person2' => $request->user_id,
        ]);
    }
}
