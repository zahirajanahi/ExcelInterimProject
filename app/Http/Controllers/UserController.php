<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

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
}