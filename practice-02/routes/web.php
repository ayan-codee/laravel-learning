<?php

use App\Http\Controllers\students;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});

Route::view('add','add-student')->name('add');
Route::post('/add',[students::class, 'add'] );
Route::get('list',[students::class,'list'])->name('list');
Route::get('list/delete/{id}',[students::class,'delete']);
Route::get('list/update/{id}',[students::class,'update']);
Route::get('/list/search',[students::class,'search']);
Route::post('list/updated/{id}',[students::class,'updated']);