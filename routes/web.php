<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Auth\LoginController as ClientLoginController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;

//////////Auth
Route::get('/login-form', [ClientLoginController::class, 'index'])->name('login-form');
//////////Admin Panel
Route::group(['middleware' => ['auth','verified'],'prefix' => 'panel','namespace'=>'Admin'],function(){
//////////Dasbord
    Route::prefix('dashboard')->group(function(){

        Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    });
});
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
