 <div class="modal fade" id="exampleModalLg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Add Council's Governing Board</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" autocomplete="off" action="{{route('add-board-member-process')}}">
                       @csrf
                       <div class="row">
                        <div class="mb-3">
                                    <label class="col-form-label">Board Title</label>
                                    <select class="form-control" name="category">
                                        <option value="" selected disabled>--Choose Board Category--</option>
                                        @foreach($listcat as $listall)
                                        <option value="{{$listall->id}}">{{$listall->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category') <small style="color:red"> {{ $message}}</small> @enderror
                            </div>
                       </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                    <label class="col-form-label">Title/ Full Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Title And Fullname" required/>
                                    @error('name') <small style="color:red"> {{ $message}}</small> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                    <label class="col-form-label">Position</label>
                                    <input type="text" name="position" class="form-control" placeholder="Enter Position" required/>
                                    @error('position') <small style="color:red"> {{ $message}}</small> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Education</label>
                                    <textarea class="form-control editor pages-editor" name="education"></textarea>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <div class="mb-3">
                                        <label class="col-form-label">Bio</label>
                                        <textarea class="form-control editor pages-editor" name="bio"></textarea>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="col-form-label">Work Experience</label>
                                    <textarea class="form-control editor pages-editor" name="experience"></textarea>
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
                                        <option value="" selected disabled>--Choose Status--</option>
                                        <option value="Present">Present</option>
                                        <option value="Passed">Passed</option>
                                     </select>
                                     @error('status') <small style="color:red"> {{ $message}}</small> @enderror
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>&nbsp;
                             <button type="submit" class="btn btn-success">Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>