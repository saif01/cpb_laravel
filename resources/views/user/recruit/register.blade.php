@extends('user.layout.recruit')

@section('page-css')
   <style>
       .required label {
    font-weight: bold;
}
       .required label:after {
            color: #e32;
            content: ' *';
            display:inline;
        }

        button:disabled,
        button[disabled]
        {
          background-color: #cccccc;
          color: #ED5448 ;
        }

      </style>
@endsection

@section('page-js')
    <script>
        $(function() {
        $('#condition').click(function() {
            if ($(this).is(':checked')) {
                $('#submitButton').removeAttr('disabled');
            } else {
                $('#submitButton').attr('disabled', 'disabled');
            }
            });
        });
</script>
@endsection

@section('content')

<!--=================================login-->

 <section class="section-transparent page-section-pb">
  <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2 mt-130">

        <div class="register-bg clearfix">
           <div class="register-title">
             <h2 class="text-white mb-0">Rregister to your Account</h2>
            </div>
            {{-- Validation Message Show --}}
             @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                {{-- After Suffessfully Register --}}
            @if(Session::has('extraMsg'))
                <div class="alerts-and-callouts">
                <div class="alert alert-danger fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <p class="text-warning h4 text-center">{{ Session::get('extraMsg') }}</p>
                </div>
               </div>
            @endif



            <form action="{{ route('user.register') }}"  method="POST" enctype="multipart/form-data" >
                @csrf
                <div id="register-form" class="register-form">
                  <div class="row">
                  <div class="section-field col-md-6 required">
                    <label>Your Name</label>
                      <div class="field-widget">
                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                      </div>
                    </div>
                    <div class="section-field col-md-6">
                    <label>Contact</label>
                    <div class="field-widget">
                      <input type="number" class="form-control" placeholder="Enter your phone number" name="contact" >
                      </div>
                    </div>
                    </div>
                    <div class="section-field required">
                    <label>Email/Login </label>
                      <div class="field-widget">
                      <input type="email" id="check_value" onBlur="userAvailability()" name="email" class="form-control"  placeholder="Enter your email" >
                      <span id="user-availability-status1" ></span>

                      </div>
                    </div>

                  <div class="section-field col-md-6">
                    <label>Your Address </label>
                      <div class="field-widget">
                      <input class="web form-control" type="text" placeholder="Enter your Address" name="address" >
                      </div>
                  </div>

                  <div class="section-field col-md-6">
                    <label>Your CV </label>
                      <div class="field-widget">
                      <input class="web form-control" type="file"  name="document" >
                      </div>
                  </div>

                  <div class="section-field col-md-8 required">
                    <label>Profile Photo</label>
                      <div class="field-widget">
                      <input  class="email form-control" type="file" placeholder="Enter your formal photo" name="image" onchange="document.getElementById('preview1').src = window.URL.createObjectURL(this.files[0])" >
                      </div>
                    </div>

                    <div class="section-field col-md-4">
                    <img id="preview1" style="height: 100px; border-radius: 50%; float: right;" >
                    </div>


                  <div class="section-field">
                    <div class="remember-checkbox">
                      <input type="checkbox" class="form-control" name="check" id="condition" />
                        <label for="condition">Accept our <a href="#"> privacy policy</a> and <a href="#"> customer agreement</a></label>
                    </div>
                  </div>

                  <button type="submit" name="submit" id="submitButton" class="button mt-20" disabled="disabled">Register an account <i class="fa fa-check"></i> </button>

                </div>

            </form>


           </div>
        </div>
      </div>
  </div>
</section>

<!--=================================login-->

@endsection
