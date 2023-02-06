<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function validacion(){
    
        $credentials =  request()->only('email','password');
        
        $email = $credentials['email'];
        $password = $credentials['password'];
        
        if($email == "esalassulca@gmail.com" && $password == "123"){
            
            return redirect()->route('login')->with('succes','tarea creada correctamente');

        }else{
            return redirect()->route('login');
        }
    }
}
