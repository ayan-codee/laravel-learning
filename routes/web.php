<?php

use App\Http\Controllers\practice;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\users;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', [RegisterController::class,'welcome'])->name('welcome')->middleware('checklogin');

Route::prefix('ayan')->group(function(){
    Route::get('about',[practice::class,'about'])->name('about');         
    Route::view('services','services')->name('services');             
});

Route::controller(practice::class)->group(function(){
    Route::get('/','home');                    
    Route::get('about','about');                    
    Route::get('service','services');                    
});

Route::get('/',[RegisterController::class,'register'])->name('register');
Route::get('/login',[RegisterController::class,'login'])->name('login');
Route::post('/login',[RegisterController::class,'logincheck'])->name('logincheck');
Route::post('/',[RegisterController::class,'registercheck'])->name('registercheck');
Route::get('/logout',[RegisterController::class,'logout'])->name('logout');