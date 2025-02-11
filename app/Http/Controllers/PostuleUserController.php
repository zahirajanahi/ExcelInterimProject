<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\User;
use Illuminate\Http\Request;

class PostuleUserController extends Controller
{
    public function index()
{
    if (!auth()->user()->isSuperAdmin()) {
        return redirect('/')->with('error', 'Unauthorized access.');
    }
    
    $applications = JobApplication::with(['jobOffer', 'user'])
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    return view('dashboard.postule-users', compact('applications'));
}


    public function updateApplicationStatus(Request $request, JobApplication $application)
    {
        if (!auth()->user()->isSuperAdmin()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $validated = $request->validate([
            'status' => 'required|in:pending,accepted,rejected'
        ]);

        $application->update(['status' => $validated['status']]);

        return response()->json(['success' => true]);
    }
    
}

