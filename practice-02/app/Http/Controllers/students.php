<?php

namespace App\Http\Controllers;

use App\Models\Students as ModelsStudents;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class students extends Controller
{
    function upload(Request $req){
      $file = $req->file('file')->store('public');
      $fileArrName = explode('/', $file); 
      $fileName = $fileArrName[1];
      return view('home',['file'=>$fileName]);
    }
}
