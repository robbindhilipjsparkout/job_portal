@extends('layouts.mainapp')
@section('content')



        <div class="col-lg-8 offset-3">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

</div>



<div class="card-header text-center col-lg-6 offset-lg-3"  >{{ __('Job Seeker List') }}</div>


        <div class="table-responsive col-lg-6 offset-lg-3">
        <table class="table table-bordered table-hover">
            <thead>
        <tr>
        <th scope="col">NAME</th>
        <th scope="col">email</th>
        <th scope="col">phone_number</th>
        <th scope="col">Action</th>
        </tr>
        </thead>
       <tbody>

        @foreach($users as $user)
        <tr>
        <td>{{$user->name}}</td>      
        <td>{{$user->email}}</td>   
        <td>{{$user->phone_number}}</td>      


        <td><span>


        
                    <i class="fa fa-pencil" data-toggle="modal" data-target="#EdittaskModal{{$user->id}}" style="cursor:pointer">Edit</i>
                      <!--model popup for Edit-->
 <div class="modal fade" id="EdittaskModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="EdittaskModalLabel" aria-hidden="true" >
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
             
					
                  <form action="{{route('updatejobseeker', $user->id)}}" method="POST" id="update-text-form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <input type="text" name="name" value="{{ $user->name }}"  class="form-control" id="todo"><br>
                    <input type="text" name="email" value="{{ $user->email }}"  class="form-control" id="todo"><br>
                    <input type="text" name="phone_number" value="{{ $user->phone_number }}"  class="form-control" id="todo"><br>

                    <button type="submit" class="btn btn-danger" >Edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </form>
                    
               </div>      
            </div> 
        </div>
    </div>
</div>


            <br><br>

            <i class="fa fa-close color-danger" data-toggle="modal" data-target="#deleteUserModal{{$user->id}}" style="cursor:pointer"></i>

            <!--model popup for delete-->
             <div class="modal fade" id="deleteUserModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
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
                <form action="{{route('destroyjobseeker',$user->id)}}" method="post">
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
    <button type="button" class="btn btn-secondary" data-dismiss="modal"> <a href="{{ route('admindashboard') }}">back</a></button>
@endsection