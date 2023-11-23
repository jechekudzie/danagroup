<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [SiteController::class,'index']);
Route::get('/about_dana', [SiteController::class,'about_dana']);
Route::get('/about_dana_services', [SiteController::class,'about_dana_services']);
Route::get('/about_dana_oil', [SiteController::class,'about_dana_oil']);
Route::get('/about_dana_oil_products', [SiteController::class,'about_dana_oil_products']);
Route::get('/about_dana_trac', [SiteController::class,'about_dana_trac']);
Route::get('/about_dana_trac_products', [SiteController::class,'about_dana_trac_products']);
Route::get('/about_terotech', [SiteController::class,'about_terotech']);
Route::get('/about_terotech_key_accounts', [SiteController::class,'about_terotech_key_accounts']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
