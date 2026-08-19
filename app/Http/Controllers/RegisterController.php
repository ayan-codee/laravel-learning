<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function __construct()
    {
       
    }
    public function welcome()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('register');
    }


    public function login()
    {
        return view('login');
    }

    
    public function registercheck(Request $request)
    {
       
        register::create($request->all());
        return redirect()->route('login');
    }


    public function logincheck(Request $request)
    {
        $user = register::where('email', $request->email)
                ->where('password', $request->password)
                ->first(); 

        if($user){
            session([
                'username'=>$user->name,
                      'email'=>$user->email
                      ]);
                       return redirect()->route('welcome');
      }else{
        echo "worng data fahhhhhhhhhhhh";
      }
    }

   
    public function show(register $register)
    {
        //
    }

   
    public function edit(register $register)
    {
        //
    }

   
    public function update(Request $request, register $register)
    {
        //
    }

  
    public function logout(register $register)
    {
        session()->flush();
        return redirect()->route('login');
    }
}
