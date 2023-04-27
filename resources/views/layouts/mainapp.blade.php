<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ ('JOB MAINPAGE') }}</title> 
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> 
   <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    
 <!--**********************************
            styles start
        ***********************************-->
    
    @include('layouts.jobstyles')

        <!--**********************************
         styles end ti-comment-alt
        ***********************************-->

</head>

<body>
    
    <!--**********************************
        Main wrapper starts
    ***********************************-->


 <!--**********************************
            Nav header start
        ***********************************-->
        @include('layouts.jobnavbar')

     <!--**********************************
            Nav header end
        ***********************************-->



             <!--**********************************
            Header start
        ***********************************-->

       @include('layouts.jobheader')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->



        <!--**********************************
            Sidebar start
        ***********************************-->

        @include('layouts.jobsidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->


   <!--**********************************
            Content body start
        ***********************************-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>

        <!--**********************************
            Content body end
        ***********************************-->
        
      

       <!--**********************************
            Footer start
        ***********************************-->

         <!-- @include('layouts.jobfooter')  -->
        
        <!--**********************************
            Footer end
        ***********************************-->
    

            <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts start
    ***********************************-->

    @include('layouts.jobscript')

     <!--**********************************
        Scripts end
    ***********************************-->


</body>
</html>
