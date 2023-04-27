@extends('layouts.mainapp')
@section('content')

<div class="col-lg-8 offset-3">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

</div>



<div class="card-header text-center col-lg-6 offset-lg-3"  >{{ __('PostJobs List') }}</div>


        <div class="table-responsive col-lg-6 offset-lg-3">
        <table class="table table-bordered table-hover">
            <thead>
        <tr>
        <th scope="col">S:No</th>
        <th scope="col">JOB TITLE</th>
        <th scope="col">COMPANY LOGO</th>
        <th scope="col">COMPANY NAME</th>
        <th scope="col">COMPANY EMAIL</th>
        <!-- <th scope="col">JOB DESCRIPTION</th> -->
        <th scope="col">ACTIONS</th>
        </tr>


        </thead>
       <tbody>

        @foreach($postjobs as $postjob)
        <tr>
        <td>{{$postjob->id}}</td>  
        <td>{{$postjob->job_title}}</td>  
        <!-- <td>{{$postjob->company_logo}}</td>   -->
        
       <td> @if( $postjob->company_logo)
        <img src="{{asset('images/'. $postjob->company_logo)}} " width='75px'  height='75px'> @else - @endif</td>
        
        <td>{{$postjob->company_name}}</td>      
        <td>{{$postjob->company_email}}</td>   
        <!-- <td>{{$postjob->job_description}}</td>       -->


        <td><span>


        
<i class="fa fa-pencil" data-toggle="modal" data-target="#EdittaskModal{{$postjob->id}}" style="cursor:pointer">Edit</i>
  <!--model popup for Edit-->
<div class="modal fade" id="EdittaskModal{{$postjob->id}}" tabindex="-1" role="dialog" aria-labelledby="EdittaskModalLabel" aria-hidden="true" >
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="EdittaskModalLabel">Edit task</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<!-- <div class="modal-footer"> -->


<form action="{{route('postjobupdate', $postjob->id)}}" method="POST" id="update-text-form" enctype="multipart/form-data">
@csrf
@method('PUT')

<input type="text" name="job_title" value="{{$postjob->job_title}}"  class="form-control" id="todo"><br>
@if( $postjob->company_logo)
<img src="{{asset('images/'. $postjob->company_logo)}} " width='75px'  height='75px'>@else - @endif
<input type="file" name="company_logo" value="{{$postjob->company_logo}}"  class="form-control" id="todo"><br>
<input type="text" name="company_name" value="{{ $postjob->company_name }}"  class="form-control" id="todo"><br>
<input type="text" name="company_email" value="{{ $postjob->company_email }}"  class="form-control" id="todo"><br>
<input type="text" name="job_description" value="{{ $postjob->job_description }}"  class="form-control" id="todo"><br>

<button type="submit" class="btn btn-danger" >Edit</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

</form>

</div>      
</div> 
</div>
</div>
</div>


<br><br>

<i class="fa fa-close color-danger" data-toggle="modal" data-target="#deleteUserModal{{$postjob->id}}" style="cursor:pointer"></i>

<!--model popup for delete-->
<div class="modal fade" id="deleteUserModal{{$postjob->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="deleteUserModalLabel">Delete User</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
Are you sure you want to delete this user?
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<form action="{{route('postjobdestroy',$postjob->id)}}" method="post">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" >Delete</button>
</form>
</div>
</div>
</div>
</div>

</span>
</td>
</tr> 
        
    @endforeach

    </tbody>
    </table>
    <button type="button" class="btn btn-secondary" data-dismiss="modal"> <a href="{{url('employerdashboard')}}">back</a></button>

@endsection