<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationSubmitted;
use App\Models\JobApplication;
use App\Models\JobOffer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobOffersController extends Controller
{
    //
    public function index(){
        $jobOffers = JobOffer::where('is_active', true)
        ->orderBy('created_at', 'desc')
        ->paginate(12);

        return view("Home.offersDemploi.offers-index", compact('jobOffers'));
    }

    public function publicShow(JobOffer $jobOffer)
    {
        return view('Home.offersDemploi.public-show', compact('jobOffer'));
    }

    public function apply(Request $request, JobOffer $jobOffer)
    {
        if (!auth()->check()) {
            return redirect()->route('login')
                ->with('error', 'Veuillez vous connecter pour postuler à cette offre.');
        }

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf|max:5120', // 5MB max
            'message' => 'required|string',
        ]);

        $cvPath = $request->file('cv')->store('cv', 'public');

        $application = JobApplication::create([
            'job_offer_id' => $jobOffer->id,
            'user_id' => auth()->id(),
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'city' => $validated['city'],
            'address' => $validated['address'],
            'cv_path' => $cvPath,
            'message' => $validated['message'],
        ]);

        // // Send email to company
         Mail::to('zahirajanahi71@gmail.com')
            ->send(new JobApplicationSubmitted($application));

        return redirect()->back()
            ->with('success', 'Votre candidature a été envoyée avec succès.');
    }
 
}