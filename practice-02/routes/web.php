<?php

use App\Http\Controllers\students;
use Illuminate\Support\Facades\Route;


Route::middleware('setLang')->group(function(){
Route::get('/',function(){
    return view('welcome');
});

Route::view('home','home');
Route::get('setlang/{lang}',function($lang){
    session()->put('lang',$lang);
    return redirect('/');
});
Route::post('/home',[students::class,'upload']);

});
