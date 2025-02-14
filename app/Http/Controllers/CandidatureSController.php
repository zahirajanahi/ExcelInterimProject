<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpontaneousApplication;
use Illuminate\Support\Facades\Storage;

class candidatureSController extends Controller {

    public function index()
    {
    
        return view("Home.candidatures.candidatures-spontane");
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:spontaneous_applications,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'dob' => 'required|date',
            'education_level' => 'required|string|max:255',
            'experience' => 'nullable|string|max:255',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        }

        SpontaneousApplication::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'dob' => $request->dob,
            'education_level' => $request->education_level,
            'experience' => $request->experience,
            'cv_path' => $cvPath,
        ]);

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès.');
    }


}