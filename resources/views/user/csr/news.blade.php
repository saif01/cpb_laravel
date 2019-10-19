@extends('user.layout.master')

@section('page-js')
     <script src="{{ asset('front-end/coustom/magnify_popup/jquery.magnific-popup.min.js') }}"></script>
     <script>
        $('.test-popup-link').magnificPopup({
        type: 'image'
        });
    </script>
@endsection

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <span class="directory">News/CRS News/</span>
            <div class="page-title-name">
              <h1>C.P. Bangladesh C.R.S. News</h1>
              <p>All Information are given below</p>
            </div>z
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

    <!--=================================Press  -->

    <section class="page-section-ptb">
      <div class="container">
        <div class="row mt-50">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- <div class="title mb-30">
           <h5>Accordion Animated</h5>
         </div> -->
            <div class="accordion animated">
              @php $count = 1; @endphp
             @foreach ($news as $row)

                <div class="acd-group">
                  <a href="#" class="acd-heading">{{ $count . ". " . $row->title }} </a>

                  <div class="acd-des content_bg">
                    <b class="date_reg"><i class="fa fa-calendar-o text-success"></i> {{ date("F j, Y, g:i a", strtotime($row->created_at)) }} </b>

                    <div class="text-center ">

                      @if (!empty($row->image))
                        <b class="img-hover-zoom">
                          <a href="{{ asset($row->image) }}" class="test-popup-link">
                            <img src="{{ asset($row->image) }}" class="img_press" height="77px" width="200px">
                          </a>
                        </b>
                      @endif

                      @if (!empty($row->document))
                        <a class="button" href="{{ asset($row->document) }}" download="download">
                          <span>Download Full Document</span>
                          <i class="fa fa-download"></i>
                        </a>
                      @endif

                    </div>
                    {!! $row->details !!}
                  </div>

                </div>

                @php $count++; @endphp
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
