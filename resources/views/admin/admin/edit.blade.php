@extends('admin.layout.master')

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
                    <h4 class="card-title" id="bordered-layout-colored-controls">Admin Add</h4>

                </div>
                <div class="card-body">

                    <form action="{{ url('admin/edit-action/'.$singleData->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label>LogIn ID</label>
                                 <input type="text" name="login" class="form-control" placeholder="Enter Admin login Id" value="{{ $singleData->login }}" readonly>

                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Enter Login Password      ******" value="******" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Admin Full Name" value="{{ $singleData->name }}" required="required">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="number" class="form-control" name="contact" placeholder="Enter Admin Contact Number" value="{{ $singleData->contact }}" required="required">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter Admin E-mail Address" value="{{ $singleData->email }}" required="required">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>Active</label>
                                <div class="input-group">
                                    <div class="custom-control custom-radio d-inline-block ml-1">
                                        <input type="radio" id="activeY" value="1" name="status" class="custom-control-input"
                                        @if($singleData->status ==1)
                                        checked
                                        @endif >
                                        <label class="custom-control-label" for="activeY">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio d-inline-block ml-2">
                                        <input type="radio" id="activeN" value="0" name="status" class="custom-control-input"
                                        @if($singleData->status ==0)
                                        checked
                                        @endif >
                                        <label class="custom-control-label" for="activeN">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label>Super Admin</label>
                                <div class="input-group">
                                    <div class="custom-control custom-radio d-inline-block ml-1">
                                        <input type="radio" id="suerAdminY" value="1" name="super" class="custom-control-input"
                                        @if($singleData->super ==1)
                                        checked
                                        @endif >
                                        <label class="custom-control-label" for="suerAdminY">Yes</label>
                                    </div>
                                    <div class="custom-control custom-radio d-inline-block ml-2">
                                        <input type="radio" id="suerAdminN" value="0" name="super" class="custom-control-input"
                                        @if($singleData->super ==0)
                                        checked
                                        @endif >
                                        <label class="custom-control-label" for="suerAdminN">No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Image</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input " name="image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('preview1').src = window.URL.createObjectURL(this.files[0])" >
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img id="preview1" alt="Image Not Selected" class="rounded mx-auto d-block" src="{{ asset($singleData->image) }}" width="150px" height="100px" />
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
