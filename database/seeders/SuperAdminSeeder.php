<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        // Retrieve or create the super_admin role
        $superAdminRole = Role::firstOrCreate(
            ['name' => 'super_admin'],
            ['description' => 'Super Administrator with full access']
        );

       
        if (!User::where('email', 'excelinterim25@gmail.com')->exists()) {
            User::create([
                'name' => 'Super Admin',
                'email' => 'excelinterim25@gmail.com',
                'password' => Hash::make('excelinterim25@'),
                'role_id' => $superAdminRole->id,
                'email_verified_at' => now(),
                'is_active' => true
            ]);
        }
    }
}
