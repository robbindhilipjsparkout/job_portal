
@extends('layouts.mainapp')



@section('content')


<div class="container col-lg-6 " id="container">
	<div class="form-container sign-up-container">
    <form method="POST" action="{{ route('postjobinsert') }}" class=" mb-5 login-input" enctype="multipart/form-data">
        @csrf 
        <input type="hidden" id="employer_id" name="employer_id"  class="form-control"  value="{{ Auth::guard('employer')->id() }}" >
  <!-- <label for="job_title">Job Title:</label> -->
  <input type="text" id="job_title" name="job_title"  class="form-control"  placeholder="job_title" required>

  <input id="company_logo" type="file" class="form-control" name="company_logo"  placeholder="company_logo">
<!-- 
  <label for="company_name">Company Name:</label> -->
  <input type="text" id="company_name" name="company_name" class="form-control"  placeholder="company_name" required>

  <!--<label for="company_name">Company Name:</label> -->
  <input type="text" id="company_email" name="company_email" class="form-control"  placeholder="company_email" required>

  <!-- <label for="job_description">Job Description:</label> -->
  <textarea id="job_description" name="job_description" class="form-control"   placeholder="job_description" required></textarea>

  <!-- <label for="job_location">Job Location:</label> -->
  <input type="text" id="job_location" name="job_location" class="form-control"  placeholder="job_location" required>
<!-- 
  <label for="job_type">Job Type:</label> -->
  <select id="job_type" name="job_type" required>
    <option value="">--Select--</option>
    <option value="full_time">Full Time</option>
    <option value="part_time">Part Time</option>
    <option value="contract">Contract</option>
    <option value="temporary">Temporary</option>
  </select><br>
<!-- 
  <label for="job_category">Job Category:</label> -->
  <select id="job_category" name="job_category" required>
    <option value="">--Select--</option>
    <option value="technology">Technology</option>
    <option value="marketing">Marketing</option>
    <option value="sales">Sales</option>
    <option value="customer_service">Customer Service</option>
    <option value="finance">Finance</option>
  </select>

  <!-- <label for="job_salary">Salary:</label> -->
  <input type="text" id="job_salary" name="job_salary"  placeholder="job_salary"  class="form-control"><br>
<!-- 
  <label for="job_requirements">Requirements:</label> -->
  <!-- <textarea id="job_requirements" name="job_requirements" class="form-control"></textarea> -->

  <!-- <label for="job_deadline">Application Deadline:</label> -->
  <!-- <input type="date" id="job_deadline" name="job_deadline" class="form-control" required> -->
<!-- 
  <input type="submit" value="Submit"> -->
  <button  type="submit" class="btn btn-secondary">Post the Job </button><br><br>
<button  type="button" class="btn btn-secondary"> <a href="{{url('employerdashboard')}}">back</a></button>

  </form>
	</div>

@endsection