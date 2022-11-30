<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Zakir Hossain',
            'email' => 'zakir@gmail.com',
            'role' => '2',
            'status' => '1',
            'photo' => 'default.png',
            'added_by' => 'engzakirhossain4969@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456789'),
            'created_at' => Carbon::now(),
        ]);
    }
}
