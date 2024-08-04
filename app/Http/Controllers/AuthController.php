<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // import validator to use validator
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Hash; // Import the Hash facade
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
   function registerprocess(Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => [
            'required',
            'string',
            'min:8',
            'regex:/[A-Z]/',   // At least one uppercase letter
            'regex:/[a-z]/',   // At least one lowercase letter
            'regex:/[0-9]/',   // At least one number
            'regex:/[@$!%*?&#]/', // At least one special character
            'confirmed',
        ],
        'age' => 'required|numeric|min:1|max:150', // Corrected validation for age
        'gender' => 'required|in:Male,Female,Other', // Corrected typo from 'gander' to 'gender'
        'city' => 'required|string',
        ], [
        'password.required' => 'The password field is required.',
        'password.string' => 'The password must be a string.',
        'password.min' => 'The password must be at least 8 characters.',
        'password.regex' => 'The password must include at least one uppercase letter, one lowercase letter, one number, and one special character.',
        'password.confirmed' => 'The password confirmation does not match.',
        
       
    ]);

    if ($validator->passes()) { 
        $user = new User;
        $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->age = $request->age;
            $user->gender = $request->gender;
            $user->city = $request->city;
            $user->save();
            return redirect()->route('login')->with('success','You have registerd successfully');
    } else {
        return redirect()->route('register.view')
            ->withInput() // This is used to get old value from input fields
            ->withErrors($validator);
    }
}

}
