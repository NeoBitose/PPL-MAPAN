<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\PostinganController;

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
Route::get('/forum', [IndexController::class, 'forum']);
Route::get('/komentar', [PostinganController::class, 'komentar']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::view('/dashboard', 'admin.dashboard');
    Route::view('/view-profile', 'detailuser');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/profile-admin', [ProfileController::class, 'show_admin']);
    Route::get('/profile-user', [ProfileController::class, 'show_user']);
    Route::get('/edit-admin/{id}', [ProfileController::class, 'edit_admin']);
    Route::get('/edit-user', [ProfileController::class, 'edit_user']);
    Route::post('/update-admin/{id}', [ProfileController::class, 'update_admin']);
    Route::post('/update-user/{id}', [ProfileController::class, 'update_user']);

    Route::get('/dash-post', [DashboardController::class, 'dashboard_postingan']);
    Route::get('/nonaktif-postingan/{id}', [PostinganController::class, 'nonaktif_postingan']);
    Route::resource('/postingan', PostinganController::class);
    Route::resource('/komentar', KomentarController::class);

});



require __DIR__.'/auth.php';
