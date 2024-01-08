<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminReservationController;
use App\Http\Controllers\Admin\AdminVoitureController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;
use App\Models\Voiture;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* General Ones */
Route::get('/', function () {
    return view('accueil_', ['voitures' => Voiture::all()]);
});
Route::get('/a_propos', function () {
    return view('apropos');
});

//Recherche :
Route::post('/voituresDispo', [VoitureController::class, 'disponibilite'])->name('disponibilite');
Route::post('/voitures/chercher', [VoitureController::class, 'search'])->name('voiture.chercher');
Route::get('/reservation/creer', [ReservationController::class, 'create'])->name('reservation.creer');

// Voitures :
Route::get('/voitures', [VoitureController::class, 'index']);
Route::get('/voiture/{id}', [VoitureController::class, 'show']);

// Admin Space
Route::group(['prefix' => 'admin', 'middleware' => 'admincheck'], function () {
    Route::resource('users', AdminUserController::class);
    Route::resource('reservations', AdminReservationController::class);
    Route::resource('voitures', AdminVoitureController::class);
});

// Authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routing for links
Route::get('admin', [AdminUserController::class, 'dashboard'])->name('admin.dashboard');

// Routes for UserController
Route::prefix('admin')->group(function () {
    Route::get('users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('users', [AdminUserController::class, 'store'])->name('admin.users.store');
    Route::get('users/{user}', [AdminUserController::class, 'show'])->name('admin.users.show');
    Route::get('users/{user}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
    Route::put('users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::delete('users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
});

// Routes for ReservationController
Route::prefix('admin')->group(function () {
    Route::get('reservations', [AdminReservationController::class, 'index'])->name('admin.reservations.index');
    Route::get('reservations/create', [AdminReservationController::class, 'create'])->name('admin.reservations.create');
    Route::post('reservations', [AdminReservationController::class, 'store'])->name('admin.reservations.store');
    Route::get('reservations/{reservation}', [AdminReservationController::class, 'show'])->name('admin.reservations.show');
    Route::get('reservations/{reservation}/edit', [AdminReservationController::class, 'edit'])->name('admin.reservations.edit');
    Route::put('reservations/{reservation}', [AdminReservationController::class, 'update'])->name('admin.reservations.update');
    Route::delete('reservations/{reservation}', [AdminReservationController::class, 'destroy'])->name('admin.reservations.destroy');
});

// Routes for VoitureController
Route::prefix('admin')->group(function () {
    Route::get('voitures', [AdminVoitureController::class, 'index'])->name('admin.voitures.index');
    Route::get('voitures/create', [AdminVoitureController::class, 'create'])->name('admin.voitures.create');
    Route::post('voitures', [AdminVoitureController::class, 'store'])->name('admin.voitures.store');
    Route::get('voitures/{voiture}', [AdminVoitureController::class, 'show'])->name('admin.voitures.show');
    Route::get('voitures/{voiture}/edit', [AdminVoitureController::class, 'edit'])->name('admin.voitures.edit');
    Route::put('voitures/{voiture}', [AdminVoitureController::class, 'update'])->name('admin.voitures.update');
    Route::delete('voitures/{voiture}', [AdminVoitureController::class, 'destroy'])->name('admin.voitures.destroy');
});

/* Login & Register */
Route::get('/dashboard', function () {
    
    $user = auth()->user();
    $reservations = Reservation::where('user_id', $user->id)->get();
    
    return view('dashboard', [
        'user' => $user,
        'reservations' => $reservations,
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
