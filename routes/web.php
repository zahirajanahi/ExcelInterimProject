<?php

use App\Http\Controllers\AddOffresController;
use App\Http\Controllers\CandidatureUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobOffersController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PostuleUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Home and General Pages Routes
Route::get('/mdd', [HomeController::class, 'mdd'])->name('mdd');
Route::get('/qsn', [HomeController::class, 'qui'])->name('qsn');
Route::get('/travailT', [HomeController::class, 'travailT'])->name('travailT');
Route::get('/interim', [HomeController::class, 'interim'])->name('interim');
Route::get('/conseil', [HomeController::class, 'conseil'])->name('conseil');
Route::get('/nosvaleur', [HomeController::class, 'nosvaleur'])->name('nosvaleur');

// Job Offers Public Routes
Route::get('/nosoffers', [JobOffersController::class, 'index'])->name('nosoffers');
Route::get('/offres-emploi/{jobOffer}', [JobOffersController::class, 'publicShow'])->name('job-offers.public.show');
Route::post('/offres-emploi/{jobOffer}/apply', [JobOffersController::class, 'apply'])->name('job-offers.apply');

// Locale Route
Route::get('locale/{lang}', [LocaleController::class, 'setLocale']);

// Protected Routes (Requires Authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        if (!auth()->user()->isSuperAdmin()) {
            return redirect('/')->with('error', 'Unauthorized access.');
        }
        $users = User::with('role')->orderBy('name')->paginate(6);
        return view('dashboard.super-admin', compact('users'));
    })->name('dashboard');

    // User Management Routes
    Route::get('/candidature-users', [CandidatureUserController::class, 'index'])->name('candidature-users.index');
    Route::get('/postule-users', [PostuleUserController::class, 'index'])->name('postule-users.index');
    
    // Job Offers Management Routes
    Route::get("/add-offres-d'emploi", [AddOffresController::class, 'index'])->name("add-offres-d'emploi");
    Route::get('/add-offres/{jobOffer}/edit', [AddOffresController::class, 'edit'])->name('add-offres.edit');
    Route::delete('/add-offres/{jobOffer}', [AddOffresController::class, 'destroy'])->name('add-offres.destroy');
    
    // Full Resource Routes for Job Offers
    Route::resource('job-offers', AddOffresController::class);
    
    // Detailed Job Offers Routes
    Route::get('/add-offres/create', [AddOffresController::class, 'create'])->name('add-offres.create');
    Route::post('/add-offres', [AddOffresController::class, 'store'])->name('add-offres.store');
    Route::get('/add-offres/{jobOffer}', [AddOffresController::class, 'show'])->name('add-offres.show');
    Route::get('/add-offres/{jobOffer}/edit', [AddOffresController::class, 'edit'])->name('add-offres.edit');
    Route::put('/add-offres/{jobOffer}', [AddOffresController::class, 'update'])->name('add-offres.update');
    Route::delete('/add-offres/{jobOffer}', [AddOffresController::class, 'destroy'])->name('add-offres.destroy');
    
    // Application Status Update Route
    Route::patch('/job-applications/{application}/status', [PostuleUserController::class, 'updateApplicationStatus'])
        ->name('job-applications.update-status');

    // Employee Management Routes
    Route::get('/employees/create', [UserController::class, 'create'])->name('employees.create');
    Route::post('/employees', [UserController::class, 'store'])->name('employees.store');

    // Super Admin Only Routes
    Route::middleware(['superadmin'])->group(function () {
        Route::patch('/users/{user}/role', [UserController::class, 'updateRole'])->name('users.update-role');
    });

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes
require __DIR__.'/auth.php';
