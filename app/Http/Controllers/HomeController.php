<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index(){

        return view('home.home');
    }
    public function mdd(){

        return view('Home.ExcelInterim.MotDuDirecteur');
    }

    public function qui(){
        return view('Home.ExcelInterim.QuiSommeNous');
    }
    public function nosvaleur(){
        return view('Home.ExcelInterim.NosValeur');
    }
    public function travailT(){
        return view('Home.NosServices.travailT');
    }  
    public function interim(){
        return view('Home.NosServices.interim');
    }  
    public function conseil(){
        return view('Home.NosServices.conseilRh');
    }

 
}