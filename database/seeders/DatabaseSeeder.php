<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
            'photo' => 'Super Admin_2.png',
            'added_by' => 'engzakirhossain4969@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456789'),
            'created_at' => Carbon::now(),
        ]);
    }
}
