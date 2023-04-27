<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\Employer;
use App\Models\PostJob;
use App\Models\ApplyJob;
use App\Models\JobSeekers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;

class RegisterController extends Controller

{


    // employer register //


    public function employersregister(){
        return view('log_reg.loginjob');
    }


     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number'=>['requred'],
        ],[

            'name.required'=> 'Name is required',
            'email.required'=> 'Email is required',
            'email.email' => 'Email field must be email address.',
            'phone_number.required'=>'phone Number is requred',
            'password.required'=>'password is required',
            
        ]);
    }


       /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function employersinsert(Request $request){
        
    Employer::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'phone_number'=> $request->phone_number,
        'password' =>Hash::make($request->password),
        'password_encryted'=> $request->password,
        
    ]);
       
    return redirect('employerdashboard');
    }



// jobseekers register //

        public function jobseekersregister(){

            return view('log_reg.jobseekers-log-reg');
        }
    
        public function jobseekersinsert(Request $request){
      
            User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'phone_number'=> $request->phone_number,
                'password' =>Hash::make($request->password),
                'password_encryted'=> $request->password,
            ]);
               
            return redirect('jobseekerdashboard');
            }

//Insert 
// $user = [
//     'name'=>$name,
//     'email'=>$email,
//     'phone_number'=>$phone_number,
//     'password'=>$password
//     ];

    // \DB::table('user')->insert($user);

   // $name=$request->input('name');
        // $email=$request->input('email');
        // $phone_number=$request->input('phone_number');
        // $password=$request->input('password');


// post-job store data //


public function postjobregister(){

    return view('log_reg.jobseekers-log-reg');
}

public function postjobinsert(Request $request){

// dd($request->all());

$imageName = time().'.'.request()->company_logo->getClientOriginalExtension();    
$request->company_logo->move(public_path('images'), $imageName);

    PostJob::create([

        // 'name'=> $request->name,
        // 'email'=> $request->email,
        // 'phone_number'=> $request->phone_number,
        // 'password' =>Hash::make($request->password),
        // 'password_encryted'=> $request->password,
        'employer_id'=> $request->employer_id,
        'job_title'=> $request->job_title,
        'company_logo'=>$imageName,
        'company_name'=> $request->company_name,
        'company_email'=> $request->company_email,
        'job_description'=> $request->job_description,
        'job_location'=> $request->job_location,
        'job_type'=> $request->job_type,
        'job_category'=> $request->job_category,
        'job_salary'=> $request->job_salary,
         
    ]);

    return redirect('postjoblist')->with('message','Postjob Created Successfully');
    }



    public function applyjobregister(){

      
        $id = Auth::guard()->id();

        $joblists = ApplyJob::get();

        return view('jobseekers-portal.applyjob' ,compact('joblists'));
      
    }

public function applyjobinsert(Request $request){

    ApplyJob::create([

        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'resume'=>$request->resume,
        'cover_letter'=>$request->cover_letter,
        $joblists->roles()->attach($request->position),

        // 'position'=>$request->position,
        
  

    ]);

   
 
    return redirect('joblist')->with('message','Applied Successfully');
   

}


}



