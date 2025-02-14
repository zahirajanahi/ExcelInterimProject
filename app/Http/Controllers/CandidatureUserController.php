<?php

namespace App\Http\Controllers;

use App\Models\SpontaneousApplication;
use App\Models\User;
use Illuminate\Http\Request;

class CandidatureUserController extends Controller
{
    public function index()
    {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        $appli = SpontaneousApplication::orderBy('created_at', 'desc')
        ->paginate(10);
        

        $users = User::with('role')->orderBy('name')->paginate(10);
        return view('dashboard.candidature-users' , compact('users' , 'appli'));
    }
}
