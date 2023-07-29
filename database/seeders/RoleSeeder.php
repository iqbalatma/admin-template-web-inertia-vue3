<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public const DATA_ROLE = [
        [
            "name" => "superadmin"
        ],
        [
            "name" => "admin"
        ],
        [
            "name" => "teacher"
        ],
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::DATA_ROLE as $key => $role){
            Role::create($role);
        }
    }
}
