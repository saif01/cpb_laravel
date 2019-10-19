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
                <a href="{{ route('recruit') }}"><img id="logo_img"  src="{{ asset('front-end/coustom/logo/cpb.png') }}" alt="C.P.Bangladesh"> </a>
            </li>
            </ul>
            <!-- menu links -->
            <div class="menu-bar">
            <ul class="menu-links">

                <li class="active"><a href="{{ route('recruit') }}">Home </a> </li>
                <li><a href="{{ route('index') }}">Main Site </a> </li>

                <li><a href="javascript:void(0)">Career <i class="fa fa-angle-down fa-indicator"></i></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="{{ route('recruit') }}"> Job Apply </a></li>
                </ul>
                </li>

                 @if ( !empty(Session::get('user-email')) )
                         <li><a href="javascript:void(0)"><img src="{{ asset(Session::get('user-image')) }}" alt="User Img" style="height:50px;border-radius: 50%;"></a>
                            <!-- drop down multilevel  -->
                            <ul class="drop-down-multilevel">
                            <li><a href="{{ route('user.profile') }}"> My Profile </a></li>
                            <li><a href="{{ route('user.pass.change') }}"> Change Password </a></li>
                            <li><a href="{{ route('user.logout') }}"> LogOut </a></li>
                            </ul>
                        </li>
                 @else
                    <li><a href="{{ route('user.login.form') }}">Login </a> </li>
                    <li><a href="{{ route('user.register.form') }}">Register </a> </li>
                 @endif

            </ul>

            </div>
        </section>
        </nav>
    </div>
    </div>
</div>
</div>
