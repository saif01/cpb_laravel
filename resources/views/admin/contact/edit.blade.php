@extends('admin.layout.master')
{{-- Page CSS --}}
@section('page-css')
  <link href="{{ asset('app-assets/custom/summernote/summernote-lite.css') }}" rel="stylesheet" />
@endsection
{{-- Page Js --}}
@section('page-js')
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
                    <h4 class="card-title" id="bordered-layout-colored-controls">Contact Edit</h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('contact.update', $data->id) }}" method="post" >
                        @csrf
                            <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" name="address" placeholder="Enter Company Head Office Address" required="required">{!! $data->address !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" name="phone" placeholder="Enter Company Phone Number" value="{{ $data->phone }}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Company E-mail Address" value={{ $data->email }} required="required">
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
