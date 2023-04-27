<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;



class Logincontroller extends Controller
{
    
    public function loginjob(){
        return view('log_reg.loginjob');
    }
    // public function register(){
    //     return view('log_reg.register');
    // }

    public function dashboard(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

//    $login = User::where('email',$request->email)->where('password',$request->password)->first();

//  if($login != Null){

   // }
 
 
//  else{   

//      return redirect()->withErrors([ "The provided credentials does not match our records."]);
     

//     }
// 


// return view('mainjob'); 
   
}

}