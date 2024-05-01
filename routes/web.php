<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index']);
Route::resource('/diagnosa', DiagnosaController::class);
Route::post('/hasil-diagnosa', [DiagnosaController::class, 'diagnosa']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile-admin', [ProfileController::class, 'show_admin']);
    Route::get('/profile-user', [ProfileController::class, 'show_user']);
    Route::get('/edit-admin/{id}', [ProfileController::class, 'edit_admin']);
    Route::get('/edit-user/{id}', [ProfileController::class, 'edit_user']);
    Route::get('/update-admin/{id}', [ProfileController::class, 'update_admin']);
    Route::get('/update-user/{id}', [ProfileController::class, 'update_user']);

    

});

require __DIR__.'/auth.php';
