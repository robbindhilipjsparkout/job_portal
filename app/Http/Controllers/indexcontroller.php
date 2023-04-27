<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class indexcontroller extends Controller
{
    // public function control(){
    //     return view('cont');
    // }

    public function database(){

        // // $admin = new Admin;
        // $admin->email = 'robin@gmail.com';
        // $admin->password = Hash::make('12345678');
        // $admin->save();
         return view('Db-connect');
    }


}
