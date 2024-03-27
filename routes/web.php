<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReciteController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/add-progress', [ReciteController::class, 'create'])->name('recite.create');
    Route::post('/add-progress', [ReciteController::class, 'store'])->name('recite.store');
    Route::delete('/delete/{id}', [ReciteController::class, 'destroy'])->name('recite.destroy');

    Route::get('/edit-progress/{id}', [ReciteController::class, 'edit'])->name('recite.edit');
    Route::put('/edit-progress/{id}', [ReciteController::class, 'update'])->name('recite.update');
});

require __DIR__.'/auth.php';
