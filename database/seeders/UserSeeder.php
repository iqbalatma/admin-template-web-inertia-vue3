<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public const DATA_USER = [
        [
            "name" => "iqbal atma muliawan",
            "email" => "iqbalatma@gmail.com",
            "password" => "admin",
            "email_verified_at" => "2023-07-29 08:17:06",
        ]
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::DATA_USER as $key => $user){
            User::create($user)->assignRole("superadmin");
        }
    }
}
