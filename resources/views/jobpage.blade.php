@extends('layouts.mainapp')
 @section('content')
 
        <!--**********************************
            Content body start
        ***********************************-->

        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome') }}   {{ Auth::user()->Firstname }}  {{ __('!') }} 

                     <div class="m-6 space-x-3 text-center space-y-3">
                    @can('isUser')

                 
                    @endcan

                </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!--**********************************
            Content body end
        ***********************************-->

 @endsection