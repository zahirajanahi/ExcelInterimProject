<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'name' => 'super_admin',
                'description' => 'Super Administrator with full access'
            ],
            [
                'name' => 'admin',
                'description' => 'Administrator with limited access'
            ],
            [
                'name' => 'user',
                'description' => 'Regular user'
            ]
        ];
        
        foreach ($roles as $role) {
            Role::firstOrCreate(
                ['name' => 'admin'],
                ['description' => 'Administrator with dashboard access']
            );
        }
    }
}