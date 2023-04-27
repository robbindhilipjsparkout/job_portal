@extends('layouts.mainapp')
@section('content')



<main>

        
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Get your job</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- job filters -->

@include('jobseekers-portal.jobfilters')

<!-- job filters -->



                        <!-- Count of Job list End -->
                        @foreach($joblists as $joblist)
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                     @if( $joblist->company_logo)
                                        <img src="{{asset('images/'. $joblist->company_logo)}} " width='75px'  height='75px' alt=""> 
                                        @else - @endif
                                    </a>
                                </div>
                               
       
                                <div class="job-tittle job-tittle2">
                                    <a href="{{ route('jobdescription', $joblist->id) }}">
                                        <!-- <h4>Digital Marketer</h4> -->
                                        <h4>{{$joblist->job_title}}</h4>
                                    </a>
                                    <ul>
                                        <!-- <li>Creative Agency</li> -->
                                       <li> {{$joblist->company_name}}</li>
                                       <li> </li>
                                        <!-- <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li> -->

                                        <li>  <i class="fas fa-map-marker-alt"></i> {{$joblist->job_location}}</li>
                                        <!-- <li>$3500 - $4000</li> -->
                                        <li>  {{$joblist->job_salary}} </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link items-link2 f-right">
                                <a href="job_details.html">{{$joblist->job_type}}</a>
                                <span> {{$joblist->created_at->diffForHumans()}}</span>
                            </div></div>
                         <!-- <button class="btn btn-primary">  <a href="">Apply Now </a> </button>
                             -->
                        
                        <!-- single-job-content -->

                        @endforeach



<!--Pagination Start  -->
<!-- <div class="pagination-area pb-115 text-center">
    <div class="container">
        <div class="row">  
            <div class="col-xl-12">
                <div class="single-wrap d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-start">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!--Pagination End  -->

</main>



@endsection