<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'      =>  'Beep Demo Account',
            'email'     =>  'demo@demo.com.au',
            'password'  =>  Hash::make('hello2020')
        ]);
    }
}
