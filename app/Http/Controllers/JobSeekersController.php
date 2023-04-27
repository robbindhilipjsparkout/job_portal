<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Http\Middleware\Authenticate;
use App\Providers\RouteServiceProvider;
use App\Models\PostJob;
use App\Models\Employer;

class JobSeekersController extends Controller
{
    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    public function loginform()
    {
        return view('log_reg.jobseekers-log-reg');
    
    
    }
    public function jobseekerlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
       
                  // dd($request->all());
                        if (Auth::attempt($credentials)) {
                        
                            return redirect()->route('applyjobregister');
    
                        }
                        
                    else{
                        return back()->withErrors(['email' => 'Invalid credentials', 'password' => 'Invalid Credentials']);
                    }
        
    }


public function jobseekerlist(){

$users = User::get();
return view('admin-portal.jobseekers-list', compact('users'));

}
public function updatejobseeker(Request $request,$id)
{
    // $task->done = !$task->done;
    // $task->save();
    //    dd($request->all());
      $users =  User::where('id',$id)->update(['name'=>$request->name, 'email'=>$request->email, 'phone_number'=>$request->phone_number]);
      
     return redirect()->route('jobseekerlist')->with('message','user Updated Successfully');
    // return response()->json(['message' => 'Text updated successfully.']);

    // $todo = request('todo') == true ? true : false;

}

public function destroyjobseeker($id)
{
    
  User::where('id',$id)->delete();

  return redirect()->route('jobseekerlist')->with('message','user deleted Successfully');
}


// list of jobs in jobseekers dashboard //

public function joblist(){

     $id = Auth::guard('employer')->id();

   $joblists = PostJob::get();

    // dd($joblists);

   return view('jobseekers-portal.jobseekers-dashboard', compact('joblists'));
   
   }


public function jobdescription($id)
{
 
    $joblists = PostJob::where('id',$id)->first();

    // dd($joblists);

    return view('jobseekers-portal.jobdescription', compact('joblists'));

}


}
