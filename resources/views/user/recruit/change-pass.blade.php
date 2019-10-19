@extends('user.layout.recruit')

@section('page-js')
    <script>
        function valid() {
          if (document.chngpwd.old_password.value == "") {
            alert("Current Password Filed is Empty !!");
            document.chngpwd.old_password.focus();
            return false;
          } else if (document.chngpwd.newpassword.value == "") {
            alert("New Password Filed is Empty !!");
            document.chngpwd.newpassword.focus();
            return false;
          } else if (document.chngpwd.confirmpassword.value == "") {
            alert("Confirm Password Filed is Empty !!");
            document.chngpwd.confirmpassword.focus();
            return false;
          } else if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
            alert("Password and Confirm Password Field do not match  !!");
            document.chngpwd.confirmpassword.focus();
            return false;
          }
          return true;
        }
      </script>
@endsection

@section('content')

          <!--=================================login-->

          <section class="section-transparent page-section-pb height-100vh">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-md-offset-3 mt-130 ">

                  <div class="login-bg clearfix">
                    <div class="login-title">
                      <h2 class="text-white mb-0">Login to your Account</h2>
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

                     @if(Session::has('extraMsg'))
                        <div class="alerts-and-callouts">
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p class="text-warning h4 text-center">{{ Session::get('extraMsg') }}</p>
                            </div>
                        </div>
                     @endif

                    <form action="{{ route('user.pass.change.action') }}" method="post" >
                        @csrf
                      <div class="login-form">
                         <div class="section-field mb-20">
                          <label class="mb-10" for="Password">Current Password* </label>

                          <input type="password" name="old_password" class="Password form-control" placeholder="Enter Your Current Password" >

                        </div>

                        <div class="section-field mb-20">
                          <label class="mb-10" for="Password">New Password* </label>
                          <input type="password" name="new_password" class="Password form-control" placeholder="Enter New Password" >
                        </div>

                        <div class="section-field mb-20">
                          <label class="mb-10" for="Password">Conform Password* </label>
                          <input type="password" class="Password form-control" name="password_confirmation" placeholder="Retype New Password">
                        </div>

                        <button type="submit" name="submit" class="button mt-20">Change<i class="fa fa-check"></i> </button>
                      </div>

                    </form>


                  </div>
                </div>
              </div>
            </div>
          </section>

          <!--=================================login-->

        </div>
      </div>

@endsection
