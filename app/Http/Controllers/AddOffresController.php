<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use App\Models\User;
use Illuminate\Http\Request;

class AddOffresController extends Controller
{
    public function index()
    {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        $jobOffers = JobOffer::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        $users = User::with('role')->orderBy('name')->paginate(10);
        return view('dashboard.add-offres' , compact('users' , 'jobOffers'));
    }


    public function create()
    {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        return view('dashboard.add-offres');
    }

    public function store(Request $request)
    {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'description' => 'required|string',
            'contract_type' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $validated['posted_by'] = auth()->id();

        JobOffer::create($validated);

        return redirect()->route('job-offers.index')
            ->with('success', 'Offre d\'emploi créée avec succès.');
    }

    public function show(JobOffer $jobOffer)
    {
        return view('job-offers.show', compact('jobOffer'));
    }

    public function edit(JobOffer $jobOffer)
    {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        return view('dashboard.edit-offeres', compact('jobOffer'));
    }

    public function update(Request $request, JobOffer $jobOffer)
    {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'sector' => 'required|string|max:255',
            'description' => 'required|string',
            'contract_type' => 'required|string|max:255',
            'education' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        $jobOffer->update($validated);

        return redirect()->route('job-offers.index')
            ->with('success', 'Offre d\'emploi mise à jour avec succès.');
    }

    public function destroy(JobOffer $jobOffer)
{
    if (!auth()->user()->isSuperAdmin()) {
        return redirect('/')->with('error', 'Unauthorized access.');
    }

    $jobOffer->delete();

    return redirect()->route("add-offres-d'emploi")->with('success', 'Offre d\'emploi supprimée avec succès.');
}
}
