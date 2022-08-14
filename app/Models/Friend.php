<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Friend extends Model
{
    protected $fillable = [
        'person1',
        'person2',
        'isFriends',
    ];

    use HasFactory;

    public function persons1(){
        return $this->belongsTo(User::class, 'person1', 'id');
    }

    public function persons2(){
        return $this->belongsTo(User::class, 'person2', 'id');
    }
}
