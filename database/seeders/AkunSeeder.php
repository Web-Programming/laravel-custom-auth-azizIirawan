<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = [
            [
                'username' => 'admin',
                'name' => 'AkunAdmin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('12345678')
            ],

            [
                'username' => 'Admin1',
                'name' => 'AkunAdmin1',
                'email' => 'user1@gmail.com',
                'level' => 'user',
                'password' => Hash::make('12345678')
            ],
            [
                'username' => 'Admin2',
                'name' => 'AkunAdmin2',
                'email' => 'user2@gmail.com',
                'level' => 'user',
                'password' => Hash::make('12345678')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
