<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CandidatureUserController extends Controller
{
    public function index()
    {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        $users = User::with('role')->orderBy('name')->paginate(10);
        return view('dashboard.candidature-users' , compact('users'));
    }
}
