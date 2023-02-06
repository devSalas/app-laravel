<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class signupController extends Controller
{
    public function index(){
    
        return view('signup.index');
    }

    public function show(){
    
        $credentials =  request()->only('email','password');
        
        $email = $credentials['email'];
        $password = $credentials['password'];
        
        if($email == "esalassulca@gmail.com" && $password == "123"){
            
            return view('home.index');

        }else{
            return view('signup.index');
        }

        


    }
}
