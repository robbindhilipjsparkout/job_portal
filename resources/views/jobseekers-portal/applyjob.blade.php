@extends('layouts.mainapp')
@section('content')



<div class="container col-lg-8 offset-2" id="container">
	<div class="form-container sign-up-container col-lg-5 ">
                                <form method="post" action="{{ route('applyjobinsert') }}">
                                    @csrf

                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name"  class="form-control" required>
                                
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" class="form-control"  required>
                                
                                <label for="phone">Phone:</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                                
                                <label for="resume">Upload your resume:</label>
                                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" class="form-control" required>
                               
                                <label for=" cover_letter">Cover Letter:</label>
                                <textarea id="cover_letter" name="cover_letter" class="form-control"></textarea>
                                
                                <label for="position">Position:</label>
                              
                                <select class="form-control selectpicker" name="roles[]" id="roles"  multiple>
                              
                                    <option value="{{$joblists->id}}">{{$joblists->job_title}}</option>
               </select>

                                <button type="submit" class="btn ">Submit</button>
                                
                                </form>

  </div>
</div>  

@endsection