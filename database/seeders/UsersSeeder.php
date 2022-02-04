<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        $genders = ['male', 'female', 'other'];


        for ($i = 0; $i < 15; $i++) {
            $users[$i] = [
                'name' => 'User ' . $i + 1,
                'email' => 'user' . $i + 1 . '@mail.com',
                'age' => rand(15, 80),
                'gender' => $genders[$i % 3],
            ];
        };


        foreach ($users as $user)
            User::create($user);
    }
}
