@include('user.layout.header')
<body>
    <div class="wrapper">
        <div id="pre-loader">
            <img src="{{ asset('front-end/images/pre-loader/loader-03.svg') }}" alt="saif">
        </div>

        <header id="header" class="header fancy without-topbar text-dark">

            {{-- Main menu --}}
        <!--=================================menu -->
        @include('user.layout.recruit-menu')
        <!-- menu end -->

        </header>
        <!--=================================End header -->

        {{-- Main Content --}}
        @yield('content')


       {{-- Footer --}}
@include('user.layout.footer')
