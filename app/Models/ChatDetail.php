<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatDetail extends Model
{
    use HasFactory;

    public function chat(){
        return $this->belongsTo(Chat::class);
    }

    public function sender(){
        return $this->belongsTo(User::class, 'sender', 'id');
    }

    // public function getChat($roomId){
    //     return DB::table('chats')
    //     ->join('users', 'users.id', '=', 'chat_details.sender')
    //     ->where('chat_id', $roomId)
    //     ->select('chats_details*', 'users.name', DB::raw(Auth::user()->id." as user_id") )
    //     ->get();
    // }
}
