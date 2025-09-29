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
           <a  href="{{route('Governing-Board')}}" class="btn btn-info mt-1"  ><i class="fe fe-list"></i> List Board Members</a>
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
                                                            <h5 class="card-title">Update Board Member's Profile</h5>
                                                        </div>
                                                        <div class="card-body">
                                                              <div class="profile-pic-upload image-field">
                                                                    <div class="profile-pic p-2">
                                                                        @if($data->photo == NULL)
                                                                        <img src="{{asset('assets/img/user.png')}}" class="object-fit-cover h-100 rounded-1" alt="user">
                                                                      
                                                                        @else
                                                                        <img src="{{asset($data->photo)}}" class="object-fit-cover h-100 rounded-1" alt="user">
                                                                         
                                                                        @endif
                                                                    </div>
                                                                    
                                                                </div>
                                                                 <form method="post" enctype="multipart/form-data" autocomplete="off" action="{{route('edit-board-member-process',$id)}}">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="mb-3">
                                                                                    <label class="col-form-label">Board Title</label>
                                                                                    <select class="form-control" name="category">
                                                                                        <option value="" selected disabled>--Choose Board Category--</option>
                                                                                        @foreach($listcat as $listall)
                                                                                        <option @if($data->category_id == $listall->id) selected @endif value="{{$listall->id}}">{{$listall->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    @error('category') <small style="color:red"> {{ $message}}</small> @enderror
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                    <label class="col-form-label">Title/ Full Name</label>
                                                                                    <input type="text" name="name" class="form-control" placeholder="Enter Title And Fullname" value="{{$data->name}}" required/>
                                                                                    @error('name') <small style="color:red"> {{ $message}}</small> @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mb-3">
                                                                                    <label class="col-form-label">Position</label>
                                                                                    <input type="text" name="position" class="form-control" placeholder="Enter Position" value="{{$data->position}}" required/>
                                                                                    @error('position') <small style="color:red"> {{ $message}}</small> @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label class="col-form-label">Education</label>
                                                                                    <textarea class="form-control editor pages-editor " name="education">{{$data->education}}</textarea>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <div class="mb-3">
                                                                                        <label class="col-form-label">Bio</label>
                                                                                        <textarea class="form-control editor pages-editor" name="bio">{{$data->bio}}</textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="mb-3">
                                                                                    <label class="col-form-label">Work Experience</label>
                                                                                    <textarea class="form-control editor pages-editor" name="experience">{{$data->experience}}</textarea>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label class="col-form-label">Photo</label>
                                                                                    <input type="file" name="photo" class="form-control"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label class="col-form-label">Status</label>
                                                                                    <select class="form-control" name="status">
                                                                                        <option value="{{$data->status}}" >{{$data->status}}</option>
                                                                                        <option value="Present">Present</option>
                                                                                        <option value="Passed">Passed</option>
                                                                                    </select>
                                                                                    @error('status') <small style="color:red"> {{ $message}}</small> @enderror
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                             
                                                                            <button type="submit" class="btn btn-primary">Submit </button>
                                                                    </div>
                                                                </form>
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