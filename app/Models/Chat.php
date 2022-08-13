<?php

namespace App\Models;

use App\Models\User;
use App\Models\ChatDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chat extends Model
{
    use HasFactory;

    public function chatDetail(){
        return $this->hasMany(ChatDetail::class);
    }

    public function person1(){
        return $this->belongsTo(User::class, 'person1', 'id');
    }

    public function person2(){
        return $this->belongsTo(User::class, 'person2', 'id');
    }
}
