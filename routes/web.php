<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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
