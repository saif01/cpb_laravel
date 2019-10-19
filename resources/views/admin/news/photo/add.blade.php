@extends('admin.layout.master')
{{-- Page CSS --}}
@section('page-css')
   <!--  Dropzone CSS  -->
     <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/custom/dropzone/dropzone.css') }}">
     <style>
     .page-heading {
    margin: 20px 0;
    color: #666;
    -webkit-font-smoothing: antialiased;
    font-family: "Segoe UI Light", "Arial", serif;
    font-weight: 600;
    letter-spacing: 0.05em;
}

#my-dropzone .message {
    font-family: "Segoe UI Light", "Arial", serif;
    font-weight: 600;
    color: #0087F7;
    font-size: 1.5em;
    letter-spacing: 0.05em;
}

.dropzone {
    border: 2px dashed #0087F7;
    background: white;
    border-radius: 5px;
    min-height: 300px;
    padding: 90px 0;
    vertical-align: baseline;
}
     </style>
@endsection
{{-- Page Js --}}
@section('page-js')
 <!-- Dropzone JS -->
    <script src="{{ asset('app-assets/custom/dropzone/dropzone.min.js') }}"></script>
<script>
    Dropzone.options.dropzoneFrom = {
    autoProcessQueue: false,
    acceptedFiles: ".png,.jpg,.gif,.jpeg",
    maxFilesize: 1.0, //1 MB
    maxFiles: 20,
    maxThumbnailFilesize: 1, // MB

    init: function () {
        var submitButton = document.querySelector('#submit_all');
        myDropzone = this;
        submitButton.addEventListener("click", function () {
            myDropzone.processQueue();
         });

        this.on("complete", function () {

            if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                var _this = this;
                _this.removeAllFiles();
                window.location.replace("{{ route('photo.all') }}");
            }
            //list_image();

        });

    },
};
</script>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Multiple Files Upload</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">

                                <form action="{{ route('photo.insert') }}" class="dropzone" id="dropzoneFrom">
                                   @csrf
                                </form>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="submit_all" class="btn btn-success btn-rounded btn-block">Upload</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    {{--End of Dropzone Preview Template--}}

@endsection
