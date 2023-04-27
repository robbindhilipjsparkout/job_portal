<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Auth;
use App\Models\PostJob;
use App\Models\Employer;

class EmployerController extends Controller
{


    public function showLoginForm()
    {
        return view('log_reg.loginjob');
    }

    public function employerlogin(Request $request)
{
    $credentials = $request->only('email', 'password');

//    dd((Auth::guard('employer')));

                    if (Auth::guard('employer')->attempt($credentials)) {

                        return redirect('employerdashboard');

                    }
                    
                else{
                    return back()->withErrors(['email' => 'Invalid credentials', 'password' => 'Invalid Credentials']);
                }
    
}

// public function logout()
// {
//     Auth::guard('admin')->logout();

//     return redirect('/admin/login');


// }




public function employerlist(){

    $employers = Employer::get();
    
    return view('admin-portal.employer-list', compact('employers'));
    
    }

    public function postjoblist(){

         $id = Auth::guard('employer')->id();

        $postjobs = PostJob::where('employer_id', $id)->get();
        
        return view('post-job.postjob-list', compact('postjobs'));
        
        }


        public function postjobupdate(Request $request,$id)
{
    // $task->done = !$task->done;
    // $task->save();
    //    dd($request->all());
    $imageName = time().'.'.request()->company_logo->getClientOriginalExtension();    
    $request->company_logo->move(public_path('images'), $imageName);

      $users =  PostJob::where('id',$id)->update([ 'job_title'=> $request->job_title,'company_logo'=>$imageName, 'company_name'=> $request->company_name,  'company_email'=> $request->company_email, 'job_description'=> $request->job_description]);
      
     return redirect('postjoblist')->with('message','Postjob Updated Successfully');
    // return response()->json(['message' => 'Text updated successfully.']);

    // $todo = request('todo') == true ? true : false;

}

public function postjobdestroy($id)
{
    
    PostJob::where('id',$id)->delete();

    return redirect('postjoblist')->with('message','Postjob deleted Successfully');
 
}

    
}
