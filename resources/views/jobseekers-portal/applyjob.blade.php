@extends('layouts.mainapp')
@section('content')

<br><br>

<div class="container col-lg-5" id="container">
	<div class="form-container sign-up-container ">
                                <form method="post" action="{{ route('applyjobinsert') }}">
                                    @csrf

                                <!-- <label for="name">Name:</label> -->
                                <input type="text" id="name" name="name"  class="form-control" placeholder="name" required> <br>
                                
                                <!-- <label for="email">Email:</label> -->
                                <input type="email" id="email" name="email" class="form-control"  placeholder="email" required> <br>
<!--                                 
                                <label for="phone">Phone:</label> -->
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="phone" required><br>
                                
                                <!-- <label for="resume">Upload your resume:</label> -->
                                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" class="form-control" placeholder="resume"required><br>
<!--                                
                                <label for=" cover_letter">Cover Letter:</label> -->
                                <textarea id="cover_letter" name="cover_letter" class="form-control"  placeholder="cover_letter" ></textarea><br>
                                
                                <label for="position">Position:</label><br>
                                
                              
                           

                                <button type="submit" class="btn ">Submit</button><br>
                                
                                </form>

  </div>
</div>  
 <br><br>
@endsection