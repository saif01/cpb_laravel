@extends('user.layout.master')

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             <span class="directory">About CPB/Our-Headquaters/</span>
            <div class="page-title-name">
              <h1>C.P. Headquarters</h1>
              <p>We know the secret of success</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

    <!--=================================Our Headquarters -->

    <section class="our-history white-bg page-section-ptb">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-md-offset-1">
            <div class="section-title text-center">
              <h6>From the beginning</h6>
              <h2 class="title-effect">Our Headquarters</h2>
              <!-- <p>The Company Milestones</p> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 col-md-10 col-md-offset-1">
            <div class="timeline-dots"></div>
            <ul class="timeline">

              @php
                 $class = array("", "timeline-inverted");
                 $key = 0; // start counter
                 $class_count = count($class); // take count of class array
              @endphp

              @foreach ($headquarter as $row)

                  <li class="@php echo $class[$key]; @endphp">

                  <div class="timeline-badge">
                    <p class="theme-color">{{ $row->country }}</p>
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h5 class="timeline-title text-muted">{{ $row->company }}</h5>
                    </div>
                    <div class="timeline-body">
                      <p><b> Address: </b>{{ $row->address }}</p>
                      <p><b> Tel: </b>{{ $row->phone }} </p>
                      <p><b> E-mail: </b><a href="mailto:{{ $row->email }}">{{ $row->email }}</a></p>
                      <p><b> Web-site: </b><a href="{{ $row->website }}" target="_blank">{{ $row->website }}</a></p>
                    </div>
                  </div>
                </li>

                @php
                     if ($key == $class_count - 1) { $key = 0; }
                     else { $key++; }
                @endphp

            @endforeach

              <li class="timeline-arrow"><i class="fa fa-chevron-down"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

@endsection
