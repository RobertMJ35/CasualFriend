<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
use App\Models\Avatar;
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
            'Avatar 1',
            'Avatar 2',
            'Avatar 3',
            'Avatar 4',
            'Avatar 5',
            'Avatar 6',
            'Avatar 7',
            'Avatar 8',
            'Avatar 9',
            'Avatar 10',
            'Avatar 11',
            'Avatar 12',
            'Avatar 13',
            'Avatar 14',
            'Avatar 15',
            'Avatar 16',
            'Avatar 17',
            'Avatar 18',
        ];

        //USER
        for($i=1; $i<=20; $i++){
            User::create([
                'name' => $dummy->name(),
                'email' => $dummy->email(),
                'password' => bcrypt('password'),
                'gender' => $dummy->randomElement(['Male', 'Female']),
                'age' => $dummy->numberBetween(20, 50),
                'coin' => $dummy->numberBetween(100, 150),
                'hobby1' => $dummy->randomElement(['Sports', 'Culinary']),
                'hobby2' => $dummy->randomElement(['Gaming', 'Reading']),
                'hobby3' => $dummy->randomElement(['Music', 'Drawing']),
                'instagram' => 'https://www.instagram.com/username',
                'mobile_number' => $dummy->phoneNumber(),
                'language' => $dummy->randomElement(['Indonesia', 'English']),
                'location' => $dummy->randomElement(['Indonesia', 'Korea', 'Japan']),
                'profile_picture' => '/user/profile1.jpg',
                'register_price' => $dummy->numberBetween(100000, 125000),
                'isVisible' => 1,
                'isPay' => 1,
            ]);
        }

        for($i=1; $i<=18; $i++){
            Avatar::create([
                'name' => $avatars[$i-1],
                'price' => $dummy->numberBetween(50, 1000),
                'image' => '/'.'avatar/'.$i.'.png',
            ]);
        }
    }
}
