@extends('user.layout.master')

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="directory">About CPB/Business Operations/</span>
            <div class="page-title-name">
              <h1>C.P. Business Operations</h1>
              <p>We know the secret of success</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

     <!--=================================Mission-->

    <section class="mb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-md-offset-2">
            <div class="section-title text-center">
              <h6></h6>
              <h2 class="title-effect">Provide excellent service</h2>
              <p>We are dedicated to providing you with the best experience possible.</p>
            </div>
          </div>
        </div>
        <div class="row">
                @php
                    $No = 1;
                @endphp
            @foreach ($buOperation as $row)
                <div class="col-lg-12 col-md-12 sm-mb-40" style="padding: 1%;">
                <div class="action-box small theme-bg ">
                    <h3><strong> <b style="color:#1a1a1a"><?php echo $No; ?>. </b>{{ $row->title }} : </strong></h3>
                    {!! $row->details  !!}
                </div>
                </div>
                @php
                    $No++;
                @endphp
            @endforeach

        </div>
      </div>
    </section>

      <!--================================End Mission-->

@endsection
