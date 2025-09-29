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
    </div>
        <!-- /product list -->
        @if (session('message_success'))
        <p class="alert alert-success" align="center" style="color:green"><b>{{session('message_success')}}</b></p>
        @endif

        @if (session('message_error'))
        <p class="alert alert-danger" align="center" style="color: red">{{session('message_error')}}</p>
        @endif
    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
            <div class="search-set">
                    <h3>  Governing Board </h3>
            </div> 
           <button  type="button" class="btn btn-info mt-1" data-bs-toggle="modal" data-bs-target="#exampleModalLg"><i class="fe fe-plus"></i> Add Board Member</button>
        </div>
        <div class="card-body">
             
            <div class="tab-content">
                <div class="tab-pane show active" id="solid-tab1">
                               
                            
                    <div class="row">
                         		<div class="card-body">
								    
								   <div class="tab-content">
									   <div class="tab-pane show active text-muted" id="fill-pill-home" role="tabpanel">
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-title">List All Titles Board Members</h5>
                                                        </div>
                                                        <div class="card-body">
                                                             <div class="table-responsive">
                                                                   <table class="table" id="myTable">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Photo</th>
                                                                            <th>Name</th>
                                                                            <th>Board Served</th>
                                                                            <th>Position</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                          @php
                                                                        $i=1;
                                                                        @endphp
                                                                        @foreach ($listboard as $list)
                                                                        <tr>
                                                                            <td>{{ $i }}</td>
                                                                            <td>
                                                                                @if($list->photo == NULL)
                                                                                <span class="avatar flex-shrink-0">
                                                                                <img alt="Img" src="{{asset('assets/img/user.png')}}"></span>
                                                                                @else
                                                                                 <span class="avatar flex-shrink-0">
                                                                                <img alt="Img" src="{{asset($list->photo)}}"></span>
                                                                                @endif
                                                                            </td>
                                                                            <td>{{$list->name}}</td>
                                                                            <td>{{$list->category->name}}</td>
                                                                            <td>{{$list->position}}</td>
                                                                            <td>{{$list->status}}</td>
                                                                            
                                                                            <td><a  href="{{ route('edit-board-member', Crypt::encrypt($list->id)) }}" style="color:white;" class="btn btn-success btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-custom-class="tooltip-success" title="Edit Member" ><i class="fa fa-edit"></i></a>
                                                                             <a onclick="return confirm( 'Are you sure you want to delete this Member?')" href=" {{ url('Governing-Board/'.$list->id).'/delete' }}"  class="btn btn-sm btn-danger delete-btn"  ><i class="tf-icons ti ti-trash" style="color: white"></i></a>
                                                                             <a  href="{{ route('view-board-member', Crypt::encrypt($list->id)) }}" style="color:white;" class="btn btn-info btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-custom-class="tooltip-info" title="View Member" ><i class="fa fa-eye"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        @php
                                                                        $i++;
                                                                        @endphp
                                                                        @endforeach
                                                                        
                                                                    </tbody>
                                                                </table>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
									   </div>
									  
									  
								   </div>
							   </div>
						   </div>
					   </div>           
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
 @include('website-manager.board-members-modal');
@endsection

@section('scripts')
 
@endsection