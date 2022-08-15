<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Avatar;
use App\Models\MyAvatar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dummy = Factory::create();
        $avatars = [
            'Pokemon 1',
            'Pokemon 2',
            'Pokemon 3',
            'Pokemon 4',
            'Pokemon 5',
            'Pokemon 6',
            'Space 1',
            'Space 2',
            'Space 3',
            'Space 4',
            'Space 5',
            'Space 6',
            'Space 7',
            'Space 8',
            'Space 9',
            'Space 10',
            'Space 11',
            'Space 12',
        ];

        $userName = [
            'Catur A',
            'Dartono Z',
            'Yakis B',
            'Tono Y',
            'Zefa F',
            'Andrew P',
            'Siti MU',
            'Nona Gri',
            'Alex S',
            'Samsul C',
            'Prono Q',
            'Karto E',
        ];

        //USER
        for($i=1; $i<=12; $i++){
            $gender = 'Male';
            if($i==5 || $i==7 || $i==8){
                $gender = 'Female';
            }
            User::create([
                'name' => $userName[$i-1],
                'email' => $dummy->email(),
                'password' => bcrypt('password'),
                'gender' => $gender,
                'age' => $dummy->numberBetween(20, 50),
                'coin' => $dummy->numberBetween(100, 1000),
                'hobby1' => $dummy->randomElement(['Sports', 'Culinary']),
                'hobby2' => $dummy->randomElement(['Gaming', 'Reading']),
                'hobby3' => $dummy->randomElement(['Music', 'Drawing']),
                'instagram' => 'https://www.instagram.com/username',
                'mobile_number' => $dummy->phoneNumber(),
                'language' => $dummy->randomElement(['Indonesia', 'English']),
                'location' => $dummy->randomElement(['Indonesia', 'Korea', 'Japan']),
                'profile_picture' => '/'.'user/'.$i.'.jpg',
                'register_price' => $dummy->numberBetween(100000, 125000),
                'isVisible' => 1,
                'isPay' => 1,
            ]);
        }

        for($i=1; $i<=18; $i++){
            Avatar::create([
                'name' => $avatars[$i-1],
                'price' => $dummy->numberBetween(50, 1000),
                'image' => '/'.'avatars/'.$i.'.png',
            ]);
        }

        for($i=1; $i<=6; $i++){
            MyAvatar::create([
                'userId' => 1,
                'avatarId' => $i,
            ]);
        }
    }
}
