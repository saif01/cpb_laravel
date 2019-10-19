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
                        <h4 class="card-title" id="bordered-layout-colored-controls">Business/Product Information Edit</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('product.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter business or product name" value="{{ $data->name }}" required="required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Web-site</label>
                                    <input type="text" class="form-control" name="website" placeholder="Enter History Title" value="{{ $data->website }}" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Product Title" value="{{ $data->title }}" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Details</label>
                                    <textarea class="form-control" name="details" required="required">{!! $data->details !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-warning mb-2 text-center" role="alert">
                            All Image Resolution is <strong> 800*600 </strong> pixels
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Slider Image 1</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input " name="image1" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('preview1').src = window.URL.createObjectURL(this.files[0])" >
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file 1</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="preview1" alt="Image 1 Not Selected" class="rounded mx-auto d-block" width="250px" height="100px" src="{{ asset($data->image1) }}" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Slider Image 2</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input " name="image2" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('preview2').src = window.URL.createObjectURL(this.files[0])" >
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file 2</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="preview2" alt="Image 2 Not Selected" class="rounded mx-auto d-block" width="250px" height="100px" src="{{ asset($data->image2) }}"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Slider Image 3</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input " name="image3" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('preview3').src = window.URL.createObjectURL(this.files[0])" >
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file 3</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="preview3" alt="Image 3 Not Selected" class="rounded mx-auto d-block" width="250px" height="100px" src="{{ asset($data->image3) }}" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Slider Image 4</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input " name="image4" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('preview4').src = window.URL.createObjectURL(this.files[0])" >
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file 4</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="preview4" alt="Image 4 Not Selected" class="rounded mx-auto d-block" width="250px" height="100px" src="{{ asset($data->image4) }}" />
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Slider Image 5</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input " name="image5" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('preview5').src = window.URL.createObjectURL(this.files[0])" >
                                            <label class="custom-file-label" for="inputGroupFile01">Choose
                                                file 5</label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img id="preview5" alt="Image 5 Not Selected" class="rounded mx-auto d-block" width="250px" height="100px" src="{{ asset($data->image5) }}"/>
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
