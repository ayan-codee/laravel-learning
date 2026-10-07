<?php

namespace App\Http\Controllers;

use App\Models\Students as ModelsStudents;
use Illuminate\Http\Request;

class students extends Controller
{
    function add(Request $request){
      $student =  new ModelsStudents();
      $student->name = $request->fullName;
      $student->batch = $request->batch;
      $student->cource = $request->course;
      
      if($student->save()){
        echo "submitted successfully";
      }else{
        echo "failed try again later";
      }
    }

    function list(){
      $studentData = ModelsStudents::all();
      return view('list-student', ['students'=>$studentData]);
    }
}
