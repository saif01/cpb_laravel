@extends('user.layout.master')

@section('page-css')
   <style>
   p{
       color: white;
   }
   </style>
@endsection

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             <span class="directory">About CPB/Our Mission/</span>
                <div class="page-title-name">
                    <h1>C.P. Mission</h1>
                    <p>We know the secret of success</p>
                </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

     <!--=================================Mission-->

      <section class="gray-bg page-section-ptb">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="owl-carousel" data-nav-dots="true" data-items="2" data-md-items="2" data-sm-items="1">

                    @foreach ($mission as $row)
                         <div class="item">
                           <div class="testimonial theme-bg bottom_pos">
                              <div class="testimonial-info">{!! $row->details !!}</div>
                           </div>
                        </div>
                    @endforeach

                  </div>
               </div>
            </div>
         </div>
      </section>

      <!--================================End Mission-->

@endsection
