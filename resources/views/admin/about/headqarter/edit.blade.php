@extends('admin.layout.master')
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
                        <h4 class="card-title" id="bordered-layout-colored-controls">Headqarter Edit</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('headqarter.update', $data->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                           <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber2">Country</label>
                                            <input type="text" class="form-control" name="country" placeholder="Enter Country Full Name" value="{{ $data->country }}" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" class="form-control" name="company" placeholder="Enter Company Full Name" value="{{ $data->company }}" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" value="{{ $data->address }}"placeholder="Enter Company Head Office Address" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" name="phone" value="{{ $data->phone }}" placeholder="Enter Company Phone Number" required="required">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Web-Site</label>
                                            <input type="text" class="form-control" name="website" placeholder="Enter Company Web Address" value="{{ $data->website }}" required="required">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" name="email" placeholder="Enter Company E-mail Address" value="{{ $data->email }}" required="required">
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

     <!-- Summernote Editor CSS & JS-->
    <link href="{{ asset('app-assets/custom/summernote/summernote-lite.css') }}" rel="stylesheet" />
    <script src="{{ asset('app-assets/custom/summernote/summernote-lite.js') }}"></script>
    <script src="{{ asset('app-assets/custom/summernote/custom_edit_function.js') }}"></script>
<script>
    $(function() {
            $('form').submit(function() {
                setTimeout(function() {
                    disableButton();
                }, 0);
            });
            function disableButton() {
                $("#btnSubmit").prop('disabled', true);
            }
        });
</script>
@endsection
