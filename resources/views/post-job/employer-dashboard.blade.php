@extends('layouts.mainapp')
@section('content')


   <!--**********************************
            Content body start
        ***********************************-->

        <main>

<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <!-- <div class="slider-active">
        <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-9 col-md-10">
                        <div class="hero__caption"> -->
                            <h1 class="offset-lg-3 mb-20">Let's make your next great hire. Fast.</h1><br>
                            <h3 class="offset-lg-5 mb-50">Build Your Job Post!!</h3>
                        <!-- </div>
                    </div>
                </div> -->
                <!-- Search Box -->
                <div class="row">
                    <div class="col-xl-8">
                        <!-- form -->
                        <form action="#" class="search-box">
                            <div class="input-form">
                                <!-- <input type="text" placeholder="Job Tittle or keyword"> -->
                               
                            </div>
                            <div class="search-form rounded">
                                <a href="{{ route('postjoblist') }}">View Jobs</a>
                            </div>	<br>
                            <div class="search-form rounded">
                                <a href="{{ url('/jobpost') }}">Post A Job</a>
                            </div>	
                          <!--  <div class="select-form">
                                <div class="select-itms">
                                     <select name="select" id="select1">
                                        <option value="">Location BD</option>
                                        <option value="">Location PK</option>
                                        <option value="">Location US</option>
                                        <option value="">Location UK</option>
                                    </select> 
                                </div>
                            </div>-->
                            
                        </form>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<!-- slider Area End-->

      

        <!--**********************************
            Content body end
        ***********************************-->



@endsection