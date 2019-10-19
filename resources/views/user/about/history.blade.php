@extends('user.layout.master')

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="directory">About CPB/Our History/</span>
            <div class="page-title-name">
              <h1>C.P. BAngladesh </h1>
              <p>The Company Milestones</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

        <!--=================================Our History -->

    <section class="our-history white-bg page-section-ptb">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-md-offset-1">
            <div class="section-title text-center">
              <h6>From the beginning</h6>
              <h2 class="title-effect">Our History</h2>
              <p>The Company Milestones</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-10 col-md-offset-1">
            <div class="timeline-dots"></div>
            <ul class="timeline">

              @php
                //class and style valu in array
                $class = array("", "timeline-inverted");
                $img_set = array("right", "left");
                // start counter
                $key = 0;
                $s_key = 0;
                // take count of class array
                $class_count = count($class);
                $img_class_count = count($img_set);
             @endphp

              @foreach ($history as $row)

                  <li class="@php echo $class[$key]; @endphp">
                  <!--  get classes dynamically-->

                  <div style="float: @php echo $img_set[$s_key]; @endphp">

                    <img src="{{ asset($row->image) }}" alt="Image" height="76" width="142">

                  </div>

                  <div class="timeline-badge">
                    <p class="theme-color">{{ date("F j, Y", strtotime($row->date)) }}</p>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h5 class="timeline-title text-muted">{{ $row->title }}</h5>

                    </div>
                    <div class="timeline-body">
                      <p>{!! $row->details !!}</p>
                    </div>
                  </div>
                </li>

                @php
                     // check when classes array values ends start count from 0 again
                    if ($key == $class_count - 1) { $key = 0;}
                    else { $key++; }
                    // check when Style array values ends start count from 0 again
                    if ($s_key == $img_class_count - 1) { $s_key = 0; }
                    else { $s_key++; }
                @endphp

            @endforeach


              <li class="timeline-arrow"><i class="fa fa-chevron-down"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!--=================================Our History -->
@endsection
