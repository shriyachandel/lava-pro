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
}
