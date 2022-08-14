<?php

namespace App\Models;

use App\Models\Chat;
use App\Models\Friend;
use App\Models\MyAvatar;
use App\Models\ChatDetail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'age',
        'hobby1',
        'hobby2',
        'hobby3',
        'instagram',
        'mobile_number',
        'language',
        'location',
        'profile_picture' => 'image|mimes:jpeg,png,jpg',
    ];

    public static function getSearchData($query){
        return User::where('hobby1' , 'like', '%'.$query.'%')
        ->orWhere('hobby2' , 'like', '%'.$query.'%')
        ->orWhere('hobby3' , 'like', '%'.$query.'%')
        ->where('isVisible', 1)->get();
    }

    public function userAvatar(){
        return $this->hasMany(MyAvatar::class);
    }

    public function friends(){
        return $this->hasMany(Friend::class);
    }

    public function chat(){
        return $this->hasMany(Chat::class);
    }

    public function chatDetail(){
        return $this->hasMany(ChatDetail::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
