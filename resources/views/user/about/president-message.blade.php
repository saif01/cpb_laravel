@extends('user.layout.master')

@section('page-css')
<style>
    .picture{
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: #84ba3f;
        padding: 4px;

    }

    .thm-color{
        color: #84ba3f;
    }

   .first-letter p::first-letter {
        font-size: 300%;
        color: #84ba3f;
        margin-left: 30px;
        }
</style>
@endsection

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             <span class="directory">About CPB/President Message/</span>
                  <div class="page-title-name">
                     <h1>C.P. Bangladesh Co., Ltd</h1>
                     <p>Message of Honorable President</p>
                  </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->


<!--=================================Message Box  -->

<section class="action-box pattern full-width" style="background: url({{ asset('front-end/images/pattern/pattern-bg.png') }}) repeat;">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
         <div class="col-lg-2 col-md-2">
             <img class="picture" src="{{ asset($presidentMsg->image) }}" alt="Image" >
         </div>

            <div class="col-lg-10 col-md-10" >
                <div class="ml-5 mt-40 first-letter">
                    <h3><b class="thm-color"> Name: </b> {{ $presidentMsg->name }}</h3>
                    {!! $presidentMsg->details !!}
                </div>
            </div>
    </div>
  </div>
  </div>
</section>

<!--=================================Message Box   -->



@endsection
