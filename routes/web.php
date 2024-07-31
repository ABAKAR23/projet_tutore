<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;



Route::get('/',[HomeController::class,'home']);

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//route pour admin

Route::get('admin/dashboard',[HomeController::class,'index'])->middleware(['auth','admin']);

//route pour manager
Route::get('manager/dashboard', [ManagerController::class, 'index'])->middleware(['auth', 'manager']);

//route pour la listes des users
Route::get('viewusers', [\App\Http\Controllers\AdminController::class, 'viewusers'])->middleware(['auth', 'admin']);



// Route pour afficher la vue d'ajout d'utilisateur (facultatif si modal)
Route::get('admin/users/create', [AdminController::class, 'create'])->name('admin.users.create');

// Route pour stocker le nouvel utilisateur
Route::post('admin/users', [AdminController::class, 'store'])->name('admin.users.store');


// Routes pour les utilisateurs



Route::prefix('admin')->name('admin.')->group(function () {
    // Route pour afficher la liste des utilisateurs
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Route pour ajouter un utilisateur
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    // Ajoutez d'autres routes nécessaires pour l'édition et la suppression des utilisateurs
});

// routes/web.php

Route::get('/admin/users', [UserController::class, 'index'])->name('admin.viewusers');

Route::get('viewTournois', [AdminController::class, 'viewTournois'])->name('admin.viewTournois');


Route::get('/admin/view-tournois', [AdminController::class, 'viewTournois'])->name('admin.viewTournois');
Route::post('/add-tournament', [AdminController::class, 'storeTournament'])->name('tournament.store');
Route::post('/tournois/update', [AdminController::class, 'updateTournament'])->name('tournament.update');
Route::delete('/tournois/{id}', [AdminController::class, 'deleteTournament'])->name('tournament.delete');
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('admin.users.destroy');


Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
Route::patch('/admin/users/{id}', [UserController::class, 'update'])->name('admin.users.update');


