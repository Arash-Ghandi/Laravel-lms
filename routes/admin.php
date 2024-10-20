<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard\DashboardController;


//////////Admin Panel
Route::group(['middleware' => ['auth','verified'],'prefix' => 'panel','namespace'=>'Admin'],function(){
    //////////Dasbord
        Route::prefix('dashboard')->group(function(){

            Route::get('/',[DashboardController::class,'index'])->name('dashboard');

        });
    });
