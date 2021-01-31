<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Admin',
               'email'=>'johndoe@hotmail.com',
                'is_admin'=>'admin',
               'password'=> Hash::make("admin123"),
            ],
            [
               'name'=>'Regular User',
               'email'=>'reguser@gmail.com',
                'is_admin'=>'',
               'password'=> Hash::make("user123"),
            ],
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }
    }
}
