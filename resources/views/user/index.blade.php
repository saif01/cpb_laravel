@extends('user.layout.master')
@section('page-css')
    <!--  Vegas Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/coustom/vegas/vegas.min.css') }}">
    <!-- Text Animated CSS -->
    <link href="{{ asset('front-end/coustom/textAnimate/animate.css') }}" rel="stylesheet">
    {{--  Calendar CSS  --}}
    <link href="{{ asset('front-end/coustom/calendar/calendar.css') }}" rel="stylesheet" />
    <style>
        .contact-info p {
            color: #fff;
            font-weight: bold;
        }
    </style>
@endsection

@section('page-js')
     <!-- Vegas Slider Js -->
    <script src="{{ asset('front-end/coustom/vegas/vegas.min.js') }}"></script>
    <!-- Animated Text JS -->
    <script src="{{ asset('front-end/coustom/textAnimate/jquery.lettering.js') }}"></script>
    <script src="{{ asset('front-end/coustom/textAnimate/jquery.textillate.js') }}"></script>
    <script src="{{ asset('front-end/coustom/textAnimate/animateOptions.js') }}"></script>

    <script type="text/javascript" src="{{ asset('front-end/coustom/calendar/calendar.js') }}"></script>

    <script>
        // Home Page Two Slideshow
    $("#slideslow-bg").vegas({
        overlay: true,
        transition: 'fade',
        transitionDuration: 2000,
        delay: 4000,
        color: '#000',
        animation: 'random',
        animationDuration: 20000,
        slides: [
              @foreach ($slider as $slide )
                {
                    src: "{{ asset( $slide->image) }}"
                },
              @endforeach
        ]
    }); //Home Page Two Slideshow
    </script>
@endsection

@section('content')

<!--=================================banner -->

<section class="slider-parallax typer-banner business parallax"  id="slideslow-bg" style="height: 100vh;">
  <div class="slider-content-middle">
   <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12">
         <div class="slider-content text-center mt-100">
          <h1 class="text-white">C.P.  <span class="typer" data-delay="150" data-words="Feed,Farm,Food" data-colors="#84ba3f,#84ba3f,#84ba3f"></span>  <span class="cursor" data-cursorDisplay="|" data-owner="some-id"></span> </h1>

           <h1 class="tlt text-white mt-40">C.P. Bangladesh</h1>

           {{-- <a class="button move mt-100" href="#"> Let's talk </a> --}}
          </div>
         </div>
        </div>
     </div>
  </div>
</section>

<!--=================================banner -->




      <section class="white-bg blog masonry-main page-section-ptb">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-9">

                  <!-- ================================================ -->
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div class="masonry-item">
                        <div class="blog-entry mb-10" style="background-image: url( {{ asset('front-end/video/audio/musicbg2.jpg') }});">
                           <div class="blog-entry-audio audio-video">
                           </div>
                           <audio id="player2" src="{{ asset('front-end/video/audio/CPwaySong.mp3') }}"> </audio>
                           <div class="blog-detail">
                              <div class="entry-title mb-10">
                                 <a href="#">Listen Nancy's CP Way Song</a>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <!-- ================================================ -->
                  <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="blog-entry mb-50">
                        <div class="blog-entry-html-video clearfix">
                           <video style="width:100%;height:100%;" id="player1" poster="video/video.png" controls preload="none">
                              <source type="video/mp4" src="{{ asset('front-end/video/Farewell[720p].mp4') }}" />
                           </video>
                        </div>
                        <div class="blog-detail">
                           <div class="entry-title mb-10">
                              <a href="#">Vice Chairman Farewell </a>
                           </div>

                        </div>
                     </div>
                  </div>

                  <!-- ================================== -->
                  <div class="col-lg-6 col-md-6 col-sm-6">
                     <div class="masonry-item">
                        <div class="blog-entry mb-10">
                           <div class="clearfix">
                              <a href="{{ route('gallery') }}">
                                 <ul class="grid-post">
                                    <li>
                                       <div class="portfolio-item">
                                          <img class="img-responsive" src="{{ asset('front-end/coustom/gallery_index/gi1.jpg') }}" alt="">
                                       </div>
                                    </li>
                                    <li>
                                       <div class="portfolio-item">
                                          <img class="img-responsive" src="{{ asset('front-end/coustom/gallery_index/gi2.jpg') }}" alt="">
                                       </div>
                                    </li>
                                    <li>
                                       <div class="portfolio-item">
                                          <img class="img-responsive" src="{{ asset('front-end/coustom/gallery_index/gi3.jpg') }}" alt="">
                                       </div>
                                    </li>
                                    <li>
                                       <div class="portfolio-item">
                                          <img class="img-responsive" src="{{ asset('front-end/coustom/gallery_index/gi4.jpg') }}" alt="">
                                       </div>
                                    </li>
                                 </ul>
                              </a>
                           </div>
                           <div class="blog-detail">
                              <div class="entry-title mb-10">
                                 <a href="{{ route('gallery') }}"> C.P. Bangladesh Photo Gallery </a>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <!-- ================================== -->

               </div>
               <!-- ================================== -->
               <div class="col-lg-3 col-md-3">
                  <!-- calendar -->
                      <!-- calendar -->
                    <div class="sidebar-widget">
                        <div id="calendar">
                            <p id="calendar-day"></p>
                            <p id="calendar-date"></p>
                            <p id="calendar-month-year"></p>
                        </div>
                    </div>
                  <div class="sidebar-widget">
                    <!-- Current Recruit Circular -->
                    <h4 class="mt-40 mb-20">Current Vacancies</h4>
                    @foreach ($recruitData as $recruitRow)
                          <div class="recent-post clearfix">
                            <div class="recent-post-info">
                                <a href="{{ route('recruit') }}">
                                    {{ str_limit($recruitRow->job_title, $limit = 50 ) }} ---Read more
                                  </a>
                                <span><i class="fa fa-calendar-o"></i>  {{ date("j-F-Y", strtotime($recruitRow->deadline)) }}</span>
                            </div>
                        </div>
                    @endforeach


                    <!-- Press -->
                    <h4 class="mt-40 mb-20">Press Release</h4>
                    @foreach ($pressData as $pressRow)
                          <div class="recent-post clearfix">
                            <div class="recent-post-info">
                                <a href="{{ route('press-releases') }}">
                                    {{ str_limit($pressRow->title, $limit = 50 ) }} ---Read more
                                  </a>
                                <span><i class="fa fa-calendar-o"></i>  {{ date("j-F-Y", strtotime($pressRow->updated_at)) }}</span>
                            </div>
                        </div>
                    @endforeach

                    <!-- Events -->
                    <h4 class="mt-40 mb-20">Current Events</h4>
                     @foreach ($eventData as $eventRow)
                          <div class="recent-post clearfix">
                            <div class="recent-post-info">
                                  <a href="{{ route('event') }}">
                                    {{ str_limit($eventRow->title, $limit = 50 ) }} ---Read more
                                  </a>
                                <span><i class="fa fa-calendar-o"></i>  {{ date("j-F-Y", strtotime($eventRow->updated_at)) }}</span>
                            </div>
                        </div>
                    @endforeach

                  </div>


               </div>
               <!-- ================================== -->
            </div>
         </div>
      </section>





<!--=================================
raindrops -->
<section id="raindrops" class="raindrops" style="height: 50px;"></section>
<!--=================================
raindrops  -->

<!--=================================
 action-box -->

<section class="contact-box contact-box-top theme-bg">
  <div class="container">
    <div class="row pt-20 pb-40">
      <div class="col-md-4 sm-mb-30">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-map text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white">{!! $contactData->address !!}</h5>
            {{--  <span class="text-white">Company Address</span>  --}}
          </div>
        </div>
      </div>
      <div class="col-md-4 sm-mb-30">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-headphone text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white">{{ $contactData->phone }}</h5>
            <span class="text-white">Saturday to Thursday 9:00am-6:00pm</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-box">
          <div class="contact-icon">
            <i class="ti-email text-white"></i>
          </div>
          <div class="contact-info">
            <h5 class="text-white">{{ $contactData->email }}</h5>
            <span class="text-white">24 X 7 online support</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
 action-box -->

<!--=================================
google-map -->
<section class="google-map black-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="map-icon">
        </div>
      </div>
    </div>
  </div>
  <div class="map-open">
    <div class="col-lg-12 col-md-12 col-sm-12 mb-40">
      <h4 class="mb-30">Google Maps</h4>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.600262688122!2d90.24400221435431!3d24.045157483370307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e6cba58c5335%3A0x1b52ffdcf921b2a0!2sC.P.+Bangladesh+Head+Office+%26+Dhaka+Feed+Mill!5e0!3m2!1sen!2sbd!4v1560325967397!5m2!1sen!2sbd" style="border:0; width: 100%; height: 300px;"></iframe>
    </div>
  </div>
</section>
<!--=================================
google-map -->
      <!--=================================
 footer -->
@endsection
