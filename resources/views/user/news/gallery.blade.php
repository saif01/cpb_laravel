@extends('user.layout.master')

@section('content')
    <!--=================================page-title-->
    <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url( {{ asset('app-assets/custom/img/header.jpg') }} ); padding-top: 13%; padding-bottom: inherit;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
           <span class="directory">News/Photo Gallery/</span>
            <div class="page-title-name">
                <h1>C.P. BAngladesh Photo Gallery </h1>
                <p>We know the secret of success</p>
            </div>z
          </div>
        </div>
      </div>
    </section>
    <!--=================================End page-title -->

    <!--=================================Press  -->

   <section class="page-section-ptb">
         <div class="container">

            <div class="row mt-60">
               <div class="col-lg-12 col-md-12">
                  <h4 class="mb-30">All Gallery</h4>
                  <div class="isotope columns-4 popup-gallery">

                    @foreach ($photo as $row)
                        <div class="grid-item">
                           <div class="portfolio-item">
                              <img src="{{ asset($row->image) }}" alt="CPB Gallery">
                              <a class="popup portfolio-img" href="{{ asset($row->image) }}"><i class="fa fa-arrows-alt"></i></a>
                           </div>
                        </div>
                    @endforeach

                  </div>
               </div>
            </div>

        <div>
            {{ $photo->links() }}
        </div>

         </div>
      </section>

@endsection
