@extends('user.layout.master')

@section('page-css')
    <style>
    .process .process-content span {
      font-size: inherit;
      line-height: inherit;
    }
  </style>
@endsection

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="directory">About CPB/Corporate Structure/</span>
            <div class="page-title-name">
              <h1>C.P. Corporate Structure</h1>
              <p>We know the secret of success</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

     <!--=================================process-->
     <section class="process-list white-bg page-section-pt">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="process left">
              <div class="process-step">
                <strong>01</strong>
              </div>
              <div class="process-content">
                <div class="process-icon">
                  <span class="flaticon-line"></span>
                </div>
                <div class="process-info">
                  <h5 class="mb-20"> Analysis</h5>
                  {!! $structure->analysis !!}
                </div>
              </div>
              <div class="border-area left-bottom"></div>
            </div>
            <div class="process right">
              <div class="process-step">
                <strong>02</strong>
              </div>
              <div class="process-content text-right">
                <div class="process-icon">
                  <span class="flaticon-technology-1"></span>
                </div>
                <div class="process-info masg">
                  <h5 class="mb-20"> Design</h5>
                  {!! $structure->design !!}
                </div>
              </div>
              <div class="border-area right-top"></div>
              <div class="border-area right-bottom"></div>
            </div>
            <div class="process left">
              <div class="process-step">
                <strong>03</strong>
              </div>
              <div class="process-content">
                <div class="process-icon">
                  <span class="flaticon-computer"></span>
                </div>
                <div class="process-info">
                  <h5 class="mb-20 "> Development</h5>
                  {!! $structure->development !!}
                </div>
              </div>
              <div class="border-area left-bottom"></div>
              <div class="border-area left-top"></div>
            </div>

            <div class="process right">
              <div class="process-step">
                <strong>04</strong>
              </div>
              <div class="process-content text-right">
                <div class="process-icon">
                  <span class="flaticon-stopwatch-tool-to-control-test-time"></span>
                </div>
                <div class="process-info">
                  <h5 class="mb-20"> Testing</h5>
                  {!! $structure->testing !!}
                </div>
              </div>
              <div class="border-area right-top"></div>
              <div class="border-area right-bottom"></div>
            </div>

            <div class="process left">
              <div class="process-step">
                <strong>05</strong>
              </div>
              <div class="process-content">
                <div class="process-icon">
                  <span class="flaticon-rocket-launch"></span>
                </div>
                <div class="process-info">
                  <h5 class="mb-20"> Go-Live</h5>
                   {!! $structure->go_Live !!}
                </div>
              </div>
              <div class="border-area left-bottom"></div>
              <div class="border-area left-top"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================process-->
@endsection
