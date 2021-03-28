@extends('user.layout.master')

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <span class="directory">Products/{{ $product->name }}/</span>
            <div class="page-title-name">
                <h1>C.P. {{ $product->name }} Business </h1>
                <p>We know the secret of success</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

    <!--=================================Blog-->

        <section class="blog white-bg page-section-ptb">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="blog-entry mb-50">

                            <div class="owl-carousel" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="20">
                                <div class="item">
                                    <img class="img-responsive full-width" src="{{ asset($product->image1) }}" alt="Image">
                                </div>
                                <div class="item">
                                    <img class="img-responsive full-width" src="{{ asset($product->image2) }}" alt="Image">
                                </div>
                                <div class="item">
                                    <img class="img-responsive full-width" src="{{ asset($product->image3) }}" alt="Image">
                                </div>
                                <div class="item">
                                    <img class="img-responsive full-width" src="{{ asset($product->image4) }}" alt="Image">
                                </div>
                                <div class="item">
                                    <img class="img-responsive full-width" src="{{ asset($product->image5) }}" alt="Image">
                                </div>

                            </div>

                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="{{ $product->website }}" target="_blank">{{ $product->title }}</a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul>
                                        <li>
                                            <i class="fa fa-calendar-o"></i>{{ date("F j, Y g:i a", strtotime($product->created_at)) }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    {!! $product->details !!}
                                </div>
                                <div class="entry-share clearfix">
                                    <div class="entry-button">
                                        <a class="button arrow" href="{{ $product->website }}" target="_blank">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                    <!-- <div class="social list-style-none pull-right">
                                        <strong>Share : </strong>
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

@endsection
