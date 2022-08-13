<?php

namespace App\Models;

use App\Models\User;
use App\Models\MyAvatar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avatar extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasMany(User::class);
    }

    public function myAvatar(){
        return $this->hasMany(MyAvatar::class);
    }
}
