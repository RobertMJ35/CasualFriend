<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\User;
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

        //USER
        for($i=1; $i<=20; $i++){
            User::create([
                'name' => $dummy->name(),
                'email' => $dummy->email(),
                'password' => bcrypt('password'),
                'gender' => $dummy->randomElement(['Male', 'Female']),
                'age' => $dummy->numberBetween(20, 50),
                'coin' => $dummy->numberBetween(100, 1000),
                'hobby1' => $dummy->randomElement(['Sports', 'Culinary']),
                'hobby2' => $dummy->randomElement(['Gaming', 'Reading']),
                'hobby3' => $dummy->randomElement(['Music', 'Drawing']),
                'instagram' => 'https://www.instagram.com/username',
                'mobile_number' => $dummy->phoneNumber(),
                'language' => $dummy->randomElement(['Indonesia', 'English']),
                'location' => $dummy->randomElement(['Indonesia', 'Korea', 'Japan']),
                'profile_picture' => 'profile1.jpg',
                'register_price' => $dummy->numberBetween(100000, 125000),
                'isVisible' => true,
                'isPay' => true,
            ]);
        }
    }
}
