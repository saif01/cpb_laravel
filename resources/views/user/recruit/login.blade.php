@extends('user.layout.recruit')


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

                     @if(Session::has('extraMsg'))
                        <div class="alerts-and-callouts">
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p class="text-warning h4 text-center">{{ Session::get('extraMsg') }}</p>
                            </div>
                        </div>
                     @endif

                    <form action="{{ route('user.login') }}" method="post">
                        @csrf
                      <div class="login-form">
                        <div class="section-field mb-20">
                          <label class="mb-10" for="name">Email* </label>
                          <input id="name" class="web form-control" type="text" placeholder="User name" name="email" required="required">
                        </div>
                        <div class="section-field mb-20">
                          <label class="mb-10" for="Password">Password* </label>
                          <input id="Password" class="Password form-control" type="password" placeholder="Password" name="password" required="required">
                        </div>
                        <div class="section-field">
                          <div class="remember-checkbox mb-30">
                            <a href="pass-recover" class="pull-right">Forgot Password?</a>
                          </div>
                        </div>
                        <button type="submit" name="submit" class="button mt-20">LogIn <i class="fa fa-check"></i> </button>

                        <p class="mt-20 mb-0">Don't have an account? <a href="{{ route('user.register.form') }}"> Create one here</a></p>
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
