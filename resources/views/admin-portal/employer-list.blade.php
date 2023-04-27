@extends('layouts.mainapp')
@section('content')

<div class="col-lg-8 offset-3">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

</div>



<div class="card-header text-center col-lg-6 offset-lg-3"  >{{ __('Employer List') }}</div>


        <div class="table-responsive col-lg-6 offset-lg-3">
        <table class="table table-bordered table-hover">
            <thead>
        <tr>
        <th scope="col">S:No</th>
        <th scope="col">NAME</th>
        <th scope="col">email</th>
        <th scope="col">phone_number</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
       <tbody>

        @foreach($employers as $employer)
        <tr>
        <td>{{$employer->id}}</td>  
        <td>{{$employer->name}}</td>      
        <td>{{$employer->email}}</td>   
        <td>{{$employer->phone_number}}</td>      


        <td><span>

        </span>    
 </td>
 </tr> 
        
    @endforeach

    </tbody>
    </table>
    <button type="button" class="btn btn-secondary" data-dismiss="modal"> <a href="{{ route('admindashboard') }}">back</a></button>

@endsection