<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //



    public function show(){
         return view ('login');
    }


    public function login(Request $request){

           validator($request->all(), [

               'email' => ['required', 'email'],
               'password' => ['required']

           ])->validate();

        

           if(auth()->attempt($request->only(['email', 'password']))){
 
             return redirect()->route('dashboard');

           }

           return redirect()->back()->withErrors(['message'=> 'Email or password incorrect']);

    }


    public function logout(){

     auth()->logout();
     
     return redirect()->route('login.show');
     



    }
}
