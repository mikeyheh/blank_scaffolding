<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Ali',
            'email'=>'a@example.com',
            'password'=> bcrypt('password'),
        ]);

        User::create([
            'name'=> 'lol',
            'email'=>'l@example.com',
            'password'=> bcrypt('password'),
        ]);

        User::create([
            'name'=> 'ok',
            'email'=>'o@example.com',
            'password'=> bcrypt('password'),
        ]);
    }
}
