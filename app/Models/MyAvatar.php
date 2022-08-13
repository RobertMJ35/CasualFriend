<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyAvatar extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function avatar(){
        return $this->belongsTo(Avatar::class);
    }
}
