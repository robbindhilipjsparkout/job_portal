
	<!--	CSS here  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
            
<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                     <li> <a href="{{ url('/mainjob') }}">Home </a></li>
                                            <li><a href="job_listing.html">Find Jobs </a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="job_details.html">job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                         </ul>
                                    </nav>
                                </div>   
                                <div>
                                    @if(Route('joblist')) 
                                    <button class="btn btn-primary">  <a href="{{ url('/') }}">back </a> </button>
                                    @else
                                <button class="btn btn-primary">  <a href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                         <span >Logout</span>
                                            </a>
                                            </button>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                         @csrf
                                         </form>
                                       @endif
                                <!-- <div class="search-form">
                                <a href="#" class="button">Post A Job</a>
                            </div>  
                                     -->
                                <!-- Header-btn -->
                                <!-- <div class="header-btn d-none f-right d-lg-block">
                                    <a href="#" class="btn head-btn1">Register</a>
                                    <a href="#" class="btn head-btn2">Login</a> -->
                                   
<!--                                    
                     @if (Route::has('login'))
                    <div class="header-btn d-none f-right d-lg-block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn head-btn1">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn head-btn1">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"class="btn head-btn1">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                                </div> -->
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
        
    </header>