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

    public function chats(){
        return $this->belongsTo(Chat::class);
    }

    public function senders(){
        return $this->belongsTo(User::class, 'sender', 'id');
    }
}
