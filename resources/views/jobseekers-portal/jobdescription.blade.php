@extends('layouts.mainapp')
@section('content')
<!-- 
@includes('layouts.jobscript')
@includes('layouts.jobstyles') -->

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{$joblists->job_title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area end-->

    
   
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"> @if( $joblists->company_logo)
                                        <img src="{{asset('images/'. $joblists->company_logo)}} " width='75px'  height='75px' alt=""> 
                                        @else - @endif
                                    </a>
                                </div>

                                <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p>{{$joblists->job_description}}</p>
                            </div>


   <!-- Right Content -->
   <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span>{{$joblists->created_at->diffForHumans()}}</span></li>
                              <li>Location : <span>{{$joblists->job_location}}</span></li>
                              <!-- <li>Vacancy : <span>02</span></li> -->
                              <li>Job nature : <span>{{$joblists->job_type}}</span></li>
                              <li>Salary :  <span>{{$joblists->job_salary}} </span></li>
                              <!-- <li>Application date : <span>12 Sep 2020</span></li> -->
                          </ul>
                         <div class="apply-btn2">
                         <a href="{{ route('jobseekersloginjob') }}"  class="btn">Apply Now</a>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>Colorlib</span>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            
                              <ul>
                                <li>Name: <span>{{$joblists->company_name}} </span></li>
                                <!-- <li>Web : <span> colorlib.com</span></li> -->
                                <li>Email: <span>{{$joblists->company_email}}</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

        <a href="{{ route('joblist') }}"  class="btn">Back</a>

@endsection