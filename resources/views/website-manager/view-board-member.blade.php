@php 
$pageName = "web"; 
$subpageName = "add_board";
@endphp

@extends('layouts.app')


@section('content')

<div class="content">
    <div class="page-header">
        <div class="add-item d-flex">
            <div class="page-title">
                <h4 class="fw-bold">Main Setup</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-divide mb-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#"> Website Manager</a></li>
                         
                        <li class="breadcrumb-item active" aria-current="page">Governing Board</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <a href="{{route('Governing-Board')}}" class="btn btn-primary" style="float: right;"><i data-feather="arrow-left" class="me-2"></i>Back to Board Members</a>
  	 
    </div>
  
							 
						 
							
        <!-- /product list -->
        @if (session('message_success'))
        <p class="alert alert-success" align="center" style="color:green"><b>{{session('message_success')}}</b></p>
        @endif

        @if (session('message_error'))
        <p class="alert alert-danger" align="center" style="color: red">{{session('message_error')}}</p>
        @endif

        <div class="card">
            <div class="card-body">
                
                <div class="row border-bottom mb-3">
                    <div class="col-md-5">
                        <p class="text-dark mb-2 fw-semibold">Name:</p>
                        <div>
                            <h4 class="mb-1">{{$data->name}}</h4>
                        </div>
                        <p class="text-dark mb-2 fw-semibold">Position:</p>
                        <div>
                            <h4 class="mb-1">{{$data->position}}</h4>
                        </div>
                        <p class="text-dark mb-2 fw-semibold">Status:</p>
                        <div>
                            <h4 class="mb-1">{{$data->status}}</h4>
                        </div>
                         <p class="text-dark mb-2 fw-semibold">Board Title:</p>
                        <div>
                            <h4 class="mb-1">{{$data->category->name}}</h4>
                        </div>
                    </div>
                     <div class="col-md-5"></div>
                    
                    <div class="col-md-2">
                        <div class="mb-3">
                            
                            <div class="mt-3">
                                @if($data->photo == NULL)
                                <img src="{{asset('assets/img/user.png')}}" class="object-fit-cover h-100 rounded-1" alt="user">
                                
                                @else
                                <img src="{{asset($data->photo)}}" class="object-fit-cover h-100 rounded-1" alt="user">
                                    
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="fw-medium">Bio: <span class="text-dark fw-medium"> </span></p>
                    <div class="table-responsive mb-3">
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    
                                    <td class="text-gray-9 fw-medium text-end">{{$data->bio}}</td>
                                     
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <p class="fw-medium">Education: <span class="text-dark fw-medium"> </span></p>
                    <div class="table-responsive mb-3">
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    
                                    <td class="text-gray-9 fw-medium text-end">{{$data->education}}</td>
                                     
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <p class="fw-medium">Experience: <span class="text-dark fw-medium"> </span></p>
                    <div class="table-responsive mb-3">
                        <table class="table">
                            
                            <tbody>
                                <tr>
                                    
                                    <td class="text-gray-9 fw-medium text-end">{{$data->experience}}</td>
                                     
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
               
              
                
            </div>
        </div>
   
</div>
 
@endsection

@section('scripts')
 
@endsection