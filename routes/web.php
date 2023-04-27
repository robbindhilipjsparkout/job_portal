<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobSeekersController;
use App\Models\User;
use App\Models\Admin;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Role;
use App\Models\Client;

// use App\Http\Controllers\LocalizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Route::get('/cont',[indexcontroller::class,'control']);
Route::get('/database',[indexcontroller::class, 'database']);

// Route::get('/{lang?}',function($lang="en"){
//     App::setlocale($lang);
// return view('lang.welcom');

// });

Auth::routes();


Route::get('/employerregister',[RegisterController::class, 'employersregister'])-> name('register');
Route::post('/emp_register',[RegisterController::class, 'employersinsert'])->name('emp_register');

Route::get('/jobseekersregister',[RegisterController::class, 'jobseekersregister'])-> name('jobseekersregister');
Route::post('/job_seekers_register',[RegisterController::class, 'jobseekersinsert'])->name('job_seekers_register');


Route::get('/employerloginjob',[EmployerController::class, 'showLoginForm'])->name('loginjob');
Route::post('/employerdashboard', [EmployerController::class, 'employerlogin'])->name('dashboard');

Route::get('/jobseekersloginjob',[JobSeekersController::class, 'loginform'])->name('jobseekersloginjob');
Route::post('/jobseekersdashboard', [JobSeekersController::class, 'jobseekerlogin'])->name('jobseekersdashboard');

Route::get('/adminlogin',[AdminController::class, 'adminlogin'])->name('adminlogin');
Route::post('/admindashboard',[AdminController::class, 'adminloginform'])->name('adminloginform');



// Route::get('/loginjob',[EmployerController::class, 'showLoginForm'])->name('loginjob');
// Route::post('/dashboard', [EmployerController::class, 'employerlogin'])->name('dashboard');


  

Route::get('/', function(){

    return view('layouts.welcomejob');
});


// Route::get('/mainjob', function(){

//     return view('layouts.mainjob');
// });


// Route::get('/jobdashboard', function(){
// return view('layouts.jobdashboard');

// });


Route::get('/mainjob',[HomeController::class, 'mainjob'])->name('mainjob');

Route::get('/jobdashboard',[HomeController::class, 'jobdashboard'])->name('jobdashboard');

Route::get('/admindashboard',[HomeController::class, 'admindashboard'])->name('admindashboard');

Route::get('/jobseekerlist', [JobSeekersController::class, 'jobseekerlist'])->name('jobseekerlist');
Route::put('/updatejobseeker/{id}', [JobSeekersController::class, 'updatejobseeker'])->name('updatejobseeker');
Route::delete('/destroyjobseeker/{id}', [JobSeekersController::class, 'destroyjobseeker'])->name('destroyjobseeker');




Route::get('/employerlist', [EmployerController::class,  'employerlist'])->name('employerlist');

Route::get('/postjoblist',[EmployerController::class, 'postjoblist'])->name('postjoblist');
Route::put('/postjobupdate/{id}', [EmployerController::class, 'postjobupdate'])->name('postjobupdate');
Route::delete('/postjobdestroy/{id}', [EmployerController::class, 'postjobdestroy'])->name('postjobdestroy');

Route::get('/postjobregister', [RegisterController::class,  'postjobregister'])->name('postjobregister');
Route::post('/postjobinsert', [RegisterController::class,  'postjobinsert'])->name('postjobinsert');


Route::get('/jobpost', function(){

    return view('post-job.jobpost');
    
    });
    
    Route::get('/employerdashboard', function(){

        return view('post-job.employer-dashboard');
        
        });
 
      
            Route::get('/joblist', [JobSeekersController::class, 'joblist'])->name('joblist');


            Route::get('/jobdescription/{id}',[JobSeekersController::class, 'jobdescription'])->name('jobdescription');


            Route::get('/applyjobregister',[RegisterController::class, 'applyjobregister'])->name('applyjobregister');
            Route::post('/applyjobinsert',[RegisterController::class, 'applyjobinsert'])->name('applyjobinsert');


            Route::get('/about', function(){


                return view('jobseekers-portal.about');
            });