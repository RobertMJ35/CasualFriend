<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Models\ChatDetail;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }

    public function chatPage(){
        $this->setLang();
        $chat = Chat::all();
        $chatDetail = ChatDetail::all();
        return view('chat', ['chat'=>$chat, 'chatDetail'=>$chatDetail]);
    }

    public function chatDetail(Request $request){
        $this->setLang();
        $chat = Chat::all();
        $chatDetail = ChatDetail::all();
        $messages = ChatDetail::where('chatId', $request->id);
        return view('chat', ['chat'=>$chat, 'chatDetail'=>$chatDetail, 'messages'=>$messages]);
    }

    public function sendMessage(Request $request){
        ChatDetail::create([
            'chatId' => $request->id,
            'sender' => Auth::user()->id,
            'message' => $request->message
        ]);
        return response()->json(['success'=>$request->message]);
    }

    public function loadMessage(Request $request){
        $messages = Chat::getChat($request->room_id);
        return response()->json(['data'=>$messages]);
    }
}
