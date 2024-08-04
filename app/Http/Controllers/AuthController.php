<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // import validator to use validator

class AuthController extends Controller
{
   function index(){
    return view('auth.login');
   }

   function authenticate(Request $request){
    //dd($request->all());

    $validator = validator::make($request->all(),[
        'email'=> 'required|email',
        'password'=>'required'
    ]);
    if($validator->passes()){

    }else{
        return redirect()->route('login')
        ->withInput() // this is used to get old value from input fields
        ->withErrors($validator);
    }
   }
   function register(){
    return view('auth.register');
   }
   function registerprocess(){
    $validator = validator::make($request->all(),[
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8||regex:/[A-Z]/|regex:/[a-z]|regex:/[0-9]/|regex:/[@$!%*?&#]/|confirmed',
        'age'=>'required|numeric|max:3',
        'gander'=> 'required|in:Male,Female,Other',
        'city' => 'required|string',
    ]);
    if($validator->passes()){

    }else{
        return redirect()->route('register.view')
        ->withInput() // this is used to get old value from input fields
        ->withErrors($validator);
    }
   }
}
