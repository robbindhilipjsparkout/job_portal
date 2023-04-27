<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    // use Notifiable, SoftDeletes;

    public function adminlogin()
    {
        return view('log_reg.admin-login');

    }
    public function adminloginform(Request $request)
    {
        $credentials = $request->only('email', 'password');
       
                //  dd($credentials);
                        if (Auth::guard('admin')->attempt($credentials)) {
        
                        return redirect()->route('admindashboard');
    
                        }
                        
                    else{
                        return back()->withErrors(['email' => 'Invalid credentials', 'password' => 'Invalid Credentials']);
                    }
        
}


}