@extends('admin.layout.master')

{{-- Page CSS --}}
@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/custom/datePicker/jquery-ui.min.css') }}">
    <link href="{{ asset('app-assets/custom/summernote/summernote-lite.css') }}" rel="stylesheet" />
@endsection
{{-- Page Js --}}
@section('page-js')
    <!-- DatePicker JS -->
    <script src="{{ asset('app-assets/custom/datePicker/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('app-assets/custom/datePicker/coustom_date_function.js') }}"></script>
    <!-- Summernote Editor CSS & JS-->
    <script src="{{ asset('app-assets/custom/summernote/summernote-lite.js') }}"></script>
    <script src="{{ asset('app-assets/custom/summernote/custom_edit_function.js') }}"></script>
@endsection
{{-- End Js Section --}}
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

 <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="bordered-layout-colored-controls">Event Edit</h4>

                    </div>
                    <div class="card-body">

                        <form action="{{ route('recruit.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Deadline Date</label>
                                            <div class='input-group'>
                                                <input type='text' class="form-control" id="datepicker" name="deadline" placeholder="Date of Deadline" required="required" value="{{ $data->deadline }}" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <span class="fa fa-calendar-o"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" class="form-control" name="job_title" placeholder="Enter Job Title Location " value="{{ $data->job_title }}" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job Location</label>
                                            <input type="text" class="form-control" name="location" placeholder="Enter Job Location" value="{{ $data->location }}" required="required">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Department</label>
                                            <input type="text" class="form-control" name="department" placeholder="Enter Job Department Name" value="{{ $data->department }}" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Education</label>
                                            <input type="text" class="form-control" name="education" placeholder="Enter Job Department Name" value="{{ $data->education }}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Publish Status</label>
                                        <div class="input-group">
                                            <div class="custom-control custom-radio d-inline-block ml-1">
                                                <input type="radio" id="activeY" value="1" name="status" class="custom-control-input" @if($data->status==1) checked @endif >
                                                <label class="custom-control-label" for="activeY">Yes</label>
                                            </div>
                                            <div class="custom-control custom-radio d-inline-block ml-2">
                                                <input type="radio" id="activeN" value="0" name="status" class="custom-control-input" @if($data->status==0) checked @endif >
                                                <label class="custom-control-label" for="activeN">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" name="description" required="required">{!! $data->description !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Requirement</label>
                                            <textarea class="form-control" name="requirement" required="required">{!! $data->requirement !!}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <textarea class="form-control" name="experience" required="required">{!! $data->experience !!}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Salary and Benefits</label>
                                            <textarea class="form-control" name="salary" required="required">{!! $data->salary !!}</textarea>
                                        </div>
                                    </div>
                                </div>


                            <div class="modal-footer">
                                <button type="submit" id="btnSubmit" name="submit" class="btn btn-block gradient-sublime-vivid white">Apply Changes</button>
                                <button type="button" class="btn grey btn-outline-secondary"  onClick="history.go(-1); return false;"><i class="ft-x"></i>Cancel</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
