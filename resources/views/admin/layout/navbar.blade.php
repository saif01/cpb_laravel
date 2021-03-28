@php
   use App\Http\Controllers\AdminController;
   $HistoryNotify= AdminController::HistoryNotify();
   $MissionNotify= AdminController::MissionNotify();
   $ChairmanMsgNotify= AdminController::ChairmanMsgNotify();
   $PresidentMsgNotify= AdminController::PresidentMsgNotify();
   $BUoperationNotify= AdminController::BUoperationNotify();
   $StructureNotify= AdminController::StructureNotify();
   $HeadquarterNotify= AdminController::HeadquarterNotify();
   $SRNotify= AdminController::SRNotify();
   $CommunityNotify= AdminController::CommunityNotify();
   $NewsNotify= AdminController::NewsNotify();
   $PressNotify= AdminController::PressNotify();
   $TrdevNotify= AdminController::TrdevNotify();
   $EventNotify= AdminController::EventNotify();
   $RecruitNotify= AdminController::RecruitNotify();
   $ProductNotify= AdminController::ProductNotify();
@endphp
<nav class="navbar navbar-expand-lg navbar-light bg-faded header-navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><span class="d-lg-none navbar-right navbar-collapse-toggle"><a aria-controls="navbarSupportedContent" href="javascript:;" class="open-navbar-container black"><i class="ft-more-vertical"></i></a></span>

              <div class="card-content">
                <div class="card-body text-center">
                    <span class="badge gradient-crystal-clear white">{{ Session::get('name') }}</span>
                    @if ( Session::get('super') ==1 )
                        <span class="badge gradient-pomegranate white ">Act as a Super Admin</span>
                    @else
                        <span class="badge badge-info">Act as a Admin</span>
                    @endif
                </div>
            </div>

          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">

                @if ( Session::get('publish') == 1)

                    {{-- About Section Notifications --}}
                    @if (Session::get('about') == 1)
                        @if ($HistoryNotify >0)
                        <li>
                            <a href="{{ route('history.all') }}" class="nav-link position-relative" title="History"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $HistoryNotify }}</span></a>
                        </li>
                        @endif

                        @if ($MissionNotify >0)
                        <li>
                            <a href="{{ route('mission.all') }}" class="nav-link position-relative" title="Mission"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $MissionNotify }}</span></a>
                        </li>
                        @endif

                        @if ($ChairmanMsgNotify >0)
                        <li>
                            <a href="{{ route('chairman.msg.all') }}" class="nav-link position-relative" title="ChairmanMsg"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $ChairmanMsgNotify }}</span></a>
                        </li>
                        @endif

                        @if ($PresidentMsgNotify >0)
                        <li>
                            <a href="{{ route('president.msg.all') }}" class="nav-link position-relative" title="PresidentMsg"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $PresidentMsgNotify }}</span></a>
                        </li>
                        @endif

                        @if ($BUoperationNotify >0)
                        <li>
                            <a href="{{ route('business-operation.all') }}" class="nav-link position-relative" title="BU-Operation"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $BUoperationNotify }}</span></a>
                        </li>
                        @endif

                        @if ($StructureNotify >0)
                        <li>
                            <a href="{{ route('structure.all') }}" class="nav-link position-relative" title="Structure"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $StructureNotify }}</span></a>
                        </li>
                        @endif

                        @if ($HeadquarterNotify >0)
                        <li>
                            <a href="{{ route('headqarter.all') }}" class="nav-link position-relative" title="Headqarter"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $HeadquarterNotify }}</span></a>
                        </li>
                        @endif

                    @endif

                    {{-- CSR Section Notifications --}}
                    @if (Session::get('csr') == '1')

                          @if ($SRNotify >0)
                            <li>
                                <a href="{{ route('sr.all') }}" class="nav-link position-relative" title="S.R."><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $SRNotify }}</span></a>
                            </li>
                          @endif
                          @if ($CommunityNotify >0)
                            <li>
                                <a href="{{ route('community.all') }}" class="nav-link position-relative" title="Community"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $CommunityNotify }}</span></a>
                            </li>
                          @endif

                           @if ($NewsNotify >0)
                            <li>
                                <a href="{{ route('news.all') }}" class="nav-link position-relative" title="News"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $NewsNotify }}</span></a>
                            </li>
                          @endif

                    @endif

                    {{-- News Section Notifications --}}
                    @if (Session::get('news') == '1')

                          @if ($PressNotify >0)
                            <li>
                                <a href="{{ route('press.all') }}" class="nav-link position-relative" title="Press"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $PressNotify }}</span></a>
                            </li>
                          @endif
                          @if ($TrdevNotify >0)
                            <li>
                                <a href="{{ route('trdev.all') }}" class="nav-link position-relative" title="Training & Development"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $TrdevNotify }}</span></a>
                            </li>
                          @endif

                           @if ($EventNotify >0)
                            <li>
                                <a href="{{ route('event.all') }}" class="nav-link position-relative" title="Events"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $EventNotify }}</span></a>
                            </li>
                          @endif
                    @endif

                     {{-- Recruit Section Notifications --}}
                    @if (Session::get('recruit') == '1')
                          @if ($RecruitNotify >0)
                            <li>
                                <a href="{{ route('recruit.all') }}" class="nav-link position-relative" title="Recruit"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $RecruitNotify }}</span></a>
                            </li>
                          @endif
                    @endif

                     {{-- product Section Notifications --}}
                    @if (Session::get('product') == '1')
                          @if ($ProductNotify >0)
                            <li>
                                <a href="{{ route('product.all') }}" class="nav-link position-relative" title="Product"><i class="ft-bell font-medium-3 text-info"></i><span class="notification badge badge-pill badge-danger">{{ $ProductNotify }}</span></a>
                            </li>
                          @endif
                    @endif
                @endif

                <li class="nav-item mr-2 d-none d-lg-block"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
                    <p class="d-none">fullscreen</p></a></li>


                <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                    <p class="d-none">User Settings</p>
                <img src="{{ asset(Session::get('image')) }}" alt="Admin-img" class="user_img">
                </a>
                  <div ngbdropdownmenu="" aria-labelledby="dropdownBasic3" class="dropdown-menu text-left dropdown-menu-right">
                    <a href="{{ route('admin.logout') }}" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </nav>
