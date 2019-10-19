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

{{-- Start Main Content --}}
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
                        <h4 class="card-title" id="bordered-layout-colored-controls">History Information Edit</h4>

                    </div>
                    <div class="card-body">

                        <form action="{{ route('history.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{ $data->title }}" required="required" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class='input-group'>
                                            <input type='text' class="form-control" id="datepicker" name="date" placeholder="Date of birth" required="required" value="{{ $data->date }}" />
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
                                        <label>Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input " name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('preview1').src = window.URL.createObjectURL(this.files[0])">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Details</label>
                                        <textarea class="form-control" name="details" required="required">{!! $data->details !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                        <img id="preview1" alt="Image Not Selected" src="{{ asset($data->image) }}" class="rounded mx-auto d-block" style="margin-top: 30px; max-width:350px; max-height:200px;"/>
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
