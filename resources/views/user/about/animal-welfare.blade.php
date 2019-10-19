@extends('user.layout.master')

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             <span class="directory">About CPB/Antimicrobial Use & Animal Welfare/</span>
            <div class="page-title-name">
              <h1>Antimicrobial Use & Animal Welfare</h1>
              <p>We know the secret of success</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

    <!--=================================Our Headquarters -->

   <section class="our-history white-bg page-section-ptb ">
      <div class="container">

        <div class="row">
          <div class="col-lg-10 col-md-10 col-md-offset-1">
           <img src="{{ asset('front-end/images/aw1.jpg') }}" >
          </div>
           <div class="col-lg-10 col-md-10 col-md-offset-1">
           <img src="{{ asset('front-end/images/aw2.jpg') }}" >
          </div>
        </div>
      </div>
    </section>

@endsection
