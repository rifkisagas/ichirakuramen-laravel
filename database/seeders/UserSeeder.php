<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => 'admin',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            ],
            [
                'name' => 'admin2',
                'email' => 'admin2@mail.com',
                'password' => '12345678',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
