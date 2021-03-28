@extends('user.layout.master')

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="directory">About CPB/Our Vision/</span>
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
              <h2 class="title-effect">Our Vision</h2>
              <p>The Company Visions</p>
            </div>
          </div>
        </div>
        <div class="row">

            @foreach ($vision as $item)

                <div class="row">
                    <h5> {{ $item->title }} </h5>
                </div>

                <div class="row">

                    <div class="col-md-6 text-justify">

                        <p>{!! $item->details !!}</p>

                    </div>

                    <div class="col-md-6">
                        <img src="{{ asset($item->image) }}" class="rounded mx-auto d-block img-thumbnail" alt="Image" >
                    </div>
                </div>

            @endforeach

        </div>
      </div>
    </section>


@endsection
