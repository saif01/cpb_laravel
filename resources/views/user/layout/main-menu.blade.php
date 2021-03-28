@php
   use App\Http\Controllers\ForntEndController;
   $Object = new ForntEndController();
   $product = $Object->ProductList();

@endphp

<style>

    .menu-list-items{
        height: 55px !important;
    }

    .header.fancy .mega-menu .menu-logo{
        padding: 8px 0px;
    }

</style>

<div class="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- menu start -->
                <nav id="menu" class="mega-menu">
                    <!-- menu list items container -->
                    <section class="menu-list-items">
                        <!-- menu logo -->
                        <ul class="menu-logo">

                            <li>
                                <a href="{{ route('index') }}"><img id="logo_img" src="{{ asset('front-end/coustom/logo/cpb.png') }}" alt="C.P.Bangladesh"> </a>
                            </li>
                        </ul>
                        <!-- menu links -->
                        <div class="menu-bar">
                            <ul class="menu-links">
                                <li class="active"><a href="{{ route('index') }}">Home </a></li>

                                <li><a href="javascript:void(0)">About CPB <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="{{ route('history') }}"> Our History </a></li>
                                        <li><a href="{{ route('vision') }}"> Our Vision </a></li>
                                        <li><a href="{{ route('mission') }}"> Our Mission </a></li>
                                        <li><a href="{{ route('chairman-message') }}"> Chairman Message </a></li>
                                        <li><a href="{{ route('president-message') }}"> President Message </a></li>
                                        <li><a href="{{ route('business-operation') }}"> Business Operations</a></li>
                                        <li><a href="{{ route('corporate-structure') }}"> Corporate Structure</a></li>
                                        <li><a href="{{ route('our-headquarters') }}"> Our Headquarters</a></li>
                                        <li><a href="{{ route('animal-welfare') }}">Antimicrobial Use & Animal Welfare</a></li>

                                    </ul>
                                </li>

                                <li><a href="javascript:void(0)">News <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="{{ route('press-releases') }}"> Press Releases </a></li>
                                        <li><a href="{{ route('traing-development') }}"> Traing & Development </a></li>
                                        <li><a href="{{ route('event') }}"> All Events </a></li>
                                        <li><a href="{{ route('gallery') }}"> Photo Gallery</a></li>

                                    </ul>
                                </li>

                                <li><a href="javascript:void(0)">CSR <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="{{ route('social-res') }}"> Social Responsibility </a></li>
                                        <li><a href="{{ route('community') }}"> Community </a></li>
                                        <li><a href="{{ route('news') }}"> CRS News </a></li>

                                    </ul>
                                </li>

                                <li><a href="{{ route('recruit') }}">Career </a></li>


                                <li><a href="javascript:void(0)">Products <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        @php
                                            foreach ($product as $roduct_row){
                                        @endphp
                                            <li><a href="{{ route('product', $roduct_row->name ) }}" style="text-transform: uppercase;"> {{ $roduct_row->name }}</a></li>

                                        @php  } @endphp

                                        {{-- <li><a href="product?n=Food" style="text-transform: uppercase;"> Food</a></li> --}}
                                    </ul>
                                </li>

                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>

                        </div>
                    </section>
                </nav>
            </div>
        </div>
    </div>
</div>
