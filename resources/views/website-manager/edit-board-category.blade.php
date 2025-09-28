@php 
$pageName = "web"; 
$subpageName = "board";
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
        </div>
        <div class="card-body">
             
            <div class="tab-content">
                <div class="tab-pane show active" id="solid-tab1">
                               
                            
                    <div class="row">
                         		<div class="card-body">
								    
								   <div class="tab-content">
									   <div class="tab-pane show active text-muted" id="fill-pill-home" role="tabpanel">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-title">  Update Board Title</h5>
                                                        </div>
                                                        <div class="card-body">
                                                              <form enctype="multipart/form-data" action="{{ route('edit-board-title-process',$id) }}" method="POST">
                                                                    @csrf
                                                                   <div class="mb-3">
                                                                        <label class="col-lg-3 col-form-label">Name</label>
                                                                        
                                                                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $data->name }}">
                                                                            @error('name') <small style="color:red"> {{ $message}}</small> @enderror
                                                                         
                                                                    </div>
                                                
                                                                   <div class="mb-3">
                                                                        <label class="col-lg-3 col-form-label">Status</label>
                                                                        <select class="form-control" name="status">
                                                                            <option value="{{ $data->status }}" >{{$data->status}}</option>
                                                                            <option value="Active">Active</option>
                                                                            <option value="Inactive">Inactive</option>
                                                                        </select>
                                                                            @error('status') <small style="color:red"> {{ $message}}</small> @enderror
                                                                        
                                                                    </div>
                                                                    <div class="text-end">
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <h5 class="card-title">List All Titles</h5>
                                                        </div>
                                                        <div class="card-body">
                                                             <div class="table-responsive">
                                                                   <table class="table" id="myTable">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Name</th>
                                                                            <th>Status</th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                         @php
                                                                        $i=1;
                                                                        @endphp
                                                                        @foreach ($list as $list)
                                                                        <tr>
                                                                            <td>{{ $i }}</td>
                                                                            <td>{{$list->name}}</td>
                                                                            <td>{{$list->status}}</td>
                                                                            
                                                                            <td><a style="color:white;" href="{{ route('edit-board-category', Crypt::encrypt($list->id)) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a></td>
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
 
@endsection

@section('scripts')
 
@endsection