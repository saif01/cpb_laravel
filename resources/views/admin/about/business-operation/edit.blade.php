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
                        <h4 class="card-title" id="bordered-layout-colored-controls">Business Operation Edit</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('business-operation.update', $data->id) }}" method="post" >
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label >Title</label>
                                        <input type="text" class="form-control" placeholder="Enter Business Operation Title" name="title" value="{{ $data->title }}" required="required" />
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
