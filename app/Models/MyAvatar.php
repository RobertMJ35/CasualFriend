<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyAvatar extends Model
{
    protected $fillable = [
        'userId',
        'avatarId',
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function avatars(){
        return $this->belongsTo(Avatar::class, 'avatarId', 'id');
    }
}
