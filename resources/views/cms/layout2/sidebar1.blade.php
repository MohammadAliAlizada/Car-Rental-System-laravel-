   <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{URL::to('home')}}" class="site_title"><i class="fa fa-dashboard"></i> <span>Website Admin Panle</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('images/user.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome</span>
                <h2>{{Auth::user()->lastname}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />


    <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="{{ route('companylists') }}"><i class="fa fa-home"></i> List Of Companies <span class="fa fa-chevron-right"></span></a>
                  </li>
                  
                   <li><a href="{{ route('companyProfile') }}"><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-right"></span></a>
                  </li>
                  <li><a><i class="fa fa-file-text"></i> Add Company<span class="fa fa-chevron-down"></span></a> 
                       <ul class="nav child_menu">
                         <li><a href="{{ route('cpmregister')}}"><i class="fa fa-plus-square"></i>Add A Company</a></li>
                         <li><a href="{{ route('addcmpdetail')}}"><i class="fa fa-plus-square"></i>Add Company Details</a></li>
                      </ul>
                      </li>
                  <li><a href="#"><i class="fa fa-file"></i> Emerency Contact <span class="fa fa-chevron-right"></span></a>
                  </li>
                  
                   
                </li>
                 
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
         <!-- /sidebar menu -->

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="#" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/user.png')}}" alt="">{{Auth::user()->lastname}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                  
                    
                    <li><a href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
                  </li>
                  
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->