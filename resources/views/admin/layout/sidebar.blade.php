<div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">

                 <li class="nav-item"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-tachometer blue"></i><span data-i18n="" class="menu-title">Dashboard</span></a>
                </li>
              @if(Session::get('super') == '1')
              {{-- Admin Section --}}
                <li class="has-sub nav-item"><a href="#"><i class="ft-home pink"></i><span data-i18n="" class="menu-title">Admin Section</span></a>
                <ul class="menu-content">
                  <li><a href="{{ url('/admin/add') }}" class="menu-item"><i class="ft-edit-3"></i> Admin Add</a></li>
                  <li><a href="{{ url('/admin/all') }}" class="menu-item"><i class="ft-wind"></i> Admin All</a></li>
                </ul>
              </li>
               {{-- Setting Section --}}
              <li class="has-sub nav-item"><a href="#"><i class="fa fa-cogs text-success"></i><span data-i18n="" class="menu-title">Settings</span></a>
                <ul class="menu-content">

                  <li class="has-sub"><a href="#" class="menu-item">Contact</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('contact.add') }}" class="menu-item"><i class="ft-edit-3"></i> Contact Add</a></li>
                      <li><a href="{{ route('contact.all') }}" class="menu-item"><i class="ft-wind"></i> Contact All</a></li>
                    </ul>
                  </li>

                   <li class="has-sub"><a href="#" class="menu-item">Slider</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('slider.add') }}" class="menu-item"><i class="ft-edit-3"></i> Slider Add</a></li>
                      <li><a href="{{ route('slider.all') }}" class="menu-item"><i class="ft-wind"></i> Slider All</a></li>
                    </ul>
                  </li>

                </ul>
              </li>
              @endif

              @if(Session::get('about') == '1')
            {{-- About Section --}}
               <li class="has-sub nav-item"><a href="#"><i class="ft-package cyan"></i><span data-i18n="" class="menu-title">About</span></a>
                <ul class="menu-content">

                   {{--  History Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> History</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('history.add') }}" class="menu-item"><i class="ft-edit-3"></i> History Add</a></li>
                      <li><a href="{{ route('history.all') }}" class="menu-item"><i class="ft-wind"></i> History All</a></li>
                    </ul>
                  </li>


                   {{--  Vison Section --}}
                   <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Vison</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('vision.add') }}" class="menu-item"><i class="ft-edit-3"></i> Vison Add</a></li>
                      <li><a href="{{ route('vision.all') }}" class="menu-item"><i class="ft-wind"></i> Vison All</a></li>
                    </ul>
                  </li>


                  {{-- Mission Section --}}
                   <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Mission</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('mission.add') }}" class="menu-item"><i class="ft-edit-3"></i> Mission Add</a></li>
                      <li><a href="{{ route('mission.all') }}" class="menu-item"><i class="ft-wind"></i> Mission All</a></li>
                    </ul>
                  </li>


                  {{-- Business Operation Section --}}
                   <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> B.U. Operation</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('business-operation.add') }}" class="menu-item"><i class="ft-edit-3"></i> Business Operation Add</a></li>
                      <li><a href="{{ route('business-operation.all') }}" class="menu-item"><i class="ft-wind"></i> Business Operation All</a></li>
                    </ul>
                  </li>

                  {{-- Corporate Scructure Section --}}
                    <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Structure</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('structure.add') }}" class="menu-item"><i class="ft-edit-3"></i> Structure Add</a></li>
                      <li><a href="{{ route('structure.all') }}" class="menu-item"><i class="ft-wind"></i> Structure All</a></li>
                    </ul>
                  </li>

                   {{-- Headquarter --}}
                   <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Headquarter</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('headqarter.add') }}" class="menu-item"><i class="ft-edit-3"></i> Headquarter Add</a></li>
                      <li><a href="{{ route('headqarter.all') }}" class="menu-item"><i class="ft-wind"></i> Headquarter All</a></li>
                    </ul>
                  </li>

                   {{-- Chairman Message --}}
                   <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Chairman Msg.</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('chairman.msg.add') }}" class="menu-item"><i class="ft-edit-3"></i> Message Add</a></li>
                      <li><a href="{{ route('chairman.msg.all') }}" class="menu-item"><i class="ft-wind"></i> Message All</a></li>
                    </ul>
                  </li>

                   {{-- Chairman Message --}}
                   <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> President Msg.</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('president.msg.add') }}" class="menu-item"><i class="ft-edit-3"></i> Message Add</a></li>
                      <li><a href="{{ route('president.msg.all') }}" class="menu-item"><i class="ft-wind"></i> Message All</a></li>
                    </ul>
                  </li>


                </ul>
              </li>
               @endif

               @if(Session::get('csr') == '1')
            {{-- CSR Section --}}
               <li class="has-sub nav-item"><a href="#"><i class="fa fa-file-video-o text-secondary"></i><span data-i18n="" class="menu-title">CSR Section</span></a>
                <ul class="menu-content">
                   {{--  History Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Social Response.</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('sr.add') }}" class="menu-item"><i class="ft-edit-3"></i> S.R. Add</a></li>
                      <li><a href="{{ route('sr.all') }}" class="menu-item"><i class="ft-wind"></i> S.R. All</a></li>
                    </ul>
                  </li>

                    {{--  Community Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Community</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('community.add') }}" class="menu-item"><i class="ft-edit-3"></i> Community Add</a></li>
                      <li><a href="{{ route('community.all') }}" class="menu-item"><i class="ft-wind"></i> Community All</a></li>
                    </ul>
                  </li>

                  {{--  News Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i>CSR News</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('news.add') }}" class="menu-item"><i class="ft-edit-3"></i> News Add</a></li>
                      <li><a href="{{ route('news.all') }}" class="menu-item"><i class="ft-wind"></i> News All</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
               @endif

               @if(Session::get('news') == '1')
            {{-- News Section --}}
               <li class="has-sub nav-item"><a href="#"><i class="fa fa-newspaper-o text-info"></i><span data-i18n="" class="menu-title">News Section</span></a>
                <ul class="menu-content">
                   {{--  Press Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Press</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('press.add') }}" class="menu-item"><i class="ft-edit-3"></i> Press Add</a></li>
                      <li><a href="{{ route('press.all') }}" class="menu-item"><i class="ft-wind"></i> Press All</a></li>
                    </ul>
                  </li>

                   {{--  Training & Developlopment Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Tra. & Dev.</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('trdev.add') }}" class="menu-item"><i class="ft-edit-3"></i> T. & D. Add</a></li>
                      <li><a href="{{ route('trdev.all') }}" class="menu-item"><i class="ft-wind"></i> T. & D. All</a></li>
                    </ul>
                  </li>

                   {{--  Event Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Event</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('event.add') }}" class="menu-item"><i class="ft-edit-3"></i> Event Add</a></li>
                      <li><a href="{{ route('event.all') }}" class="menu-item"><i class="ft-wind"></i> Event All</a></li>
                    </ul>
                  </li>

                   {{--  Photo Section --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Photos</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('photo.add') }}" class="menu-item"><i class="ft-edit-3"></i> Photo Add</a></li>
                      <li><a href="{{ route('photo.all') }}" class="menu-item"><i class="ft-wind"></i> Photo All</a></li>
                    </ul>
                  </li>

                </ul>
              </li>
               @endif

               @if(Session::get('recruit') == '1')
            {{-- Recruit Section --}}
               <li class="has-sub nav-item"><a href="#"><i class="ft-link-2 green"></i><span data-i18n="" class="menu-title">Recruit Section</span></a>
                <ul class="menu-content">
                   {{--  Recruit --}}
                  <li class="has-sub"><a href="#" class="menu-item"><i class="ft-chevrons-right green"></i> Recruit</a>
                    <ul class="menu-content">
                      <li><a href="{{ route('recruit.add') }}" class="menu-item"><i class="ft-edit-3"></i> Recruit Add</a></li>
                      <li><a href="{{ route('recruit.all') }}" class="menu-item"><i class="ft-wind"></i> Recruit All</a></li>
                    </ul>
                  </li>

                   <li class="nav-item"><a href="{{ route('user.all') }}"><i class="ft-user purple"></i><span data-i18n="" class="menu-title">All Users</span></a>
                    </li>

                     <li class="nav-item"><a href="{{ route('application.all') }}"><i class="ft-user purple"></i><span data-i18n="" class="menu-title">All Application</span></a>
                    </li>

                  </ul>
              </li>
               @endif

               @if(Session::get('product') == '1')
                <li class="has-sub nav-item"><a href="#"><i class="fa fa-product-hunt text-warning"></i><span data-i18n="" class="menu-title">Product Section</span></a>
                <ul class="menu-content">

                    <li><a href="{{ route('product.add') }}" class="menu-item"><i class="ft-edit"></i> Product Add</a></li>
                    <li><a href="{{ route('product.all') }}" class="menu-item"><i class="ft-list"></i> Product All</a></li>

                </ul>
                </li>
               @endif


            <li class="nav-item">
                <a href="{{ route('admin.logout') }}"><i class="ft-log-out red"></i><span data-i18n="" class="menu-title">Logout</span></a>
            </li>

            </ul>
          </div>
        </div>
