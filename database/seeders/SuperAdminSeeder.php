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

       
        if (!User::where('email', 'superadmin@example.com')->exists()) {
            User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password'),
                'role_id' => $superAdminRole->id,
                'email_verified_at' => now(),
                'is_active' => true
            ]);
        }
    }
}
