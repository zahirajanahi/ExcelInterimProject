<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobOffer;
use App\Models\Role;
use App\Models\SpontaneousApplication;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function dshb(){
        return view("dashboard.admin");
    }


    public function index(){
             
        $jobOffers = JobOffer::where('is_active', true)
        ->orderBy('created_at', 'desc')
        ->paginate(6);

        $users = User::with('role')->orderBy('name')->paginate(10);


        return view("dashboard.admin.offersDemploi" , compact('users' , 'jobOffers'));
    }

    public function postuleUsers(){
        $applications = JobApplication::with(['jobOffer', 'user'])
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('dashboard.admin.postuleUsers', compact('applications'));
    }

    public function candidatureUsers(){
        $appli = SpontaneousApplication::orderBy('created_at', 'desc')
        ->paginate(10);
        

        $users = User::with('role')->orderBy('name')->paginate(10);
        return view('dashboard.admin.candidaturesUsers', compact('users' , 'appli'));
    }
  
 
 
}