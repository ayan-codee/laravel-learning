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

    function delete($id){
      $isDeleted = ModelsStudents::destroy($id);
      if($isDeleted){
        echo "deleted successfully";
        return redirect('list');
      }
    }

    function update($id){
      $student = ModelsStudents::find($id);
      return view('update-student', ['std'=>$student]);
    }

    function updated(Request $req, $id){
      $student = ModelsStudents::find($id);
      $student->name = $req->name;
      $student->batch = $req->batch;
      $student->cource = $req->cource;
      $student->save();
      return redirect('/list');
    }

    function search(Request $req){
      $filterData = ModelsStudents::where('name','like', "%$req->searchname%")->get();
      return view('list-student',['students'=>$filterData]);
    }
}
