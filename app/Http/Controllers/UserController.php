<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function updateRole(Request $request, User $user)
    {
        $request->validate([
            'role' => 'required|in:admin,user'
        ]);

        // Don't allow modifying super admin
        if ($user->isSuperAdmin()) {
            return back()->with('error', 'Cannot modify super admin role.');
        }

        $role = Role::where('name', $request->role)->first();
        if (!$role) {
            return back()->with('error', 'Invalid role specified.');
        }

        $user->role()->associate($role);
        $user->save();

        return back()->with('success', "User role updated successfully.");
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
    
        $role = Role::where('name', 'admin')->first();
        if (!$role) {
            return back()->with('error', 'Admin role not found.');
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $role->id,
            'is_active' => true
        ]);
    
        return redirect()->route('dashboard')->with('success', 'Admin added successfully.');
    }
    
    
}
