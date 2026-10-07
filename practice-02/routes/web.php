<?php

use App\Http\Controllers\students;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});

Route::view('add','add-student')->name('add');
Route::post('/add',[students::class, 'add'] );
Route::get('list',[students::class,'list'])->name('list');