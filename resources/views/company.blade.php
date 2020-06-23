<!DOCTYPE html>
<html>
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::to('fonts/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::to('css/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ URL::to('css/green.css') }}" rel="stylesheet">
        
    <!-- bootstrap-progressbar -->
    <link href="{{ URL::to('css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ URL::to('css/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ URL::to('css/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ URL::to('css/custom.min.css') }}" rel="stylesheet">

     <!-- FullCalendar -->
    <link href="{{ URL::to('css/fullcalendar.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('css/fullcalendar.print.css') }}" rel="stylesheet" media="print">

    <!--toastr-->
    <link href="{{ URL::to('css/toastr.min.css') }}" rel="stylesheet">

</head>
<body class="nav-md">
<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{URL::to('home')}}" class="site_title"><i class="fa fa-dashboard"></i> <span>CPM Panel</span></a>
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
                  <li><a href="{{ route('Riders',['id' => encrypt(Auth::user()->company_detail_id)]) }}"><i class="fa fa-list"></i> List Of Riders <span class="fa fa-chevron-right"></span></a>
                  </li>
                  <li><a href="{{ route('Drivers',['id' => encrypt(Auth::user()->company_detail_id)]) }}"><i class="fa fa-list"></i> List Of Drivers<span class="fa fa-chevron-right"></span></a>
                  </li>
                  <li><a href="{{ route('Reserved',['id' => encrypt(Auth::user()->company_detail_id)]) }}"><i class="fa fa-list"></i>Ordered Lists<span class="fa fa-chevron-right"></span></a>
                  </li>
                   <li><a href="{{ route('companyProfile') }}"><i class="fa fa-user"></i> Profile <span class="fa fa-chevron-right"></span></a>
                  </li>
                  <li><a href="{{route('emergencyContact')}}"><i class="fa fa-file"></i> Emerency Contact <span class="fa fa-chevron-right"></span></a>
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
                    <img src="images/user.png" alt="">{{Auth::user()->lastname}}
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
        
<div class="right_col" role="main">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                 

                  <div class="x_content">

             <h1>Driver Proflile</h1>
<div class="share_detail">
         
         <div class="profile_ac_inner_det">
            <div class="profile_ac_details profile_ac_title">
               <h2>Account</h2>
            </div>
            <div class="profile_ac_form">
				<form accept-charset="UTF-8" action="http://www.zoodcars.com/site/rider/update_rider_profile" id="profile_update_form" method="post" enctype="multipart/form-data" novalidate="novalidate">                  <div class="col-lg-5 col-md-5 no_padding left">
                     <label><span class="req">* </span>EMAIL</label>
                     <div class="input_div rider_profile_name">
						
						
					<input class="form-control" type="text" name="" value=" {{ Auth::user()->email }}" readonly="readonly" class="valid">						
						
						
					</div>
                     <label><span class="req">* </span>MOBILE NUMBER </label> 
                     <div class="input_div selc">

                    <input class="form-control" type="text" name="mNumber" value=" {{ Auth::user()->phone }}" class="required phoneNumber" placeholder="Phone" readonly="readonly alphanumeric">						
					 </div>
					 
                     <label><span class="req">* </span>Firstname</label>
                     <div class="input_div">
						
						
						<input class="form-control" type="text" name="user_name" value=" {{ Auth::user()->firstname }}" id="user_name" class="required valid" placeholder="Name" minlength="2" maxlength="30">						
					</div>
					 
                     <label><span class="req">* </span>Lastnamer</label>
                     <div class="input_div">
						
						
						<input class="form-control" type="text" name="user_name" value=" {{ Auth::user()->lastname }}" id="user_name" class="required valid" placeholder="Name" minlength="2" maxlength="30">						
					</div>
					 
                     
                  </div>
                  <div class="col-lg-5 col-md-5 no_padding right">
                     <label><span class="req">*</span> OLD PASSWORD</label>
                     <div class="input_div">
						
						<input class="form-control" type="password" name="old_password" value="" id="old_password" class="pass" placeholder="At least 6 characters" minlength="6">					 
					</div>
                     <label><span class="req">*</span> NEW PASSWORD</label>
                     <div class="input _div">
					 
						<input class="form-control" type="password" name="password" value="" id="password" class="pass" placeholder="At least 6 characters" minlength="6">					</div>
                    
					<label><span class="req">*</span> CONFIRM PASSWORD</label>
                     <div class="input _div">
					 
						<input class="form-control" type="password" name="confirm_password" value="" id="confirm_password" class="pass" placeholder="At least 6 characters" minlength="6" equalto="#password">					 
					</div>
                  </div>
                
				  
                  <div class="col-lg-5 col-md-5 ">
                     <div class="profile_upload">
					 <br>
						<input class="form-control" type="file" name="image" value="" id="image" class="file file-1 media_image">					 
						<br>
                        <button type="button" class="btn btn-primary">Update Profile </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         </div>
      </div>
         </div>
      </div>
         </div>
      </div>
                    
                    
							
						









 <script src="{{ URL::to('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ URL::to('js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ URL::to('js/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ URL::to('js/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ URL::to('js/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ URL::to('js/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ URL::to('js/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ URL::to('js/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ URL::to('js/jquery.flot.js') }}"></script>
    <script src="{{ URL::to('js/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::to('js/jquery.flot.time.js') }}"></script>
    <script src="{{ URL::to('js/jquery.flot.stack.js') }}"></script>
    <script src="{{ URL::to('js/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ URL::to('js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ URL::to('js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ URL::to('js/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ URL::to('js/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ URL::to('js/jquery.vmap.js') }}"></script>
    <script src="{{ URL::to('js/jquery.vmap.world.js') }}"></script>
    <script src="{{ URL::to('js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ URL::to('js/moment.min.js') }}"></script>
    <script src="{{ URL::to('js/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ URL::to('js/custom.min.js') }}"></script>
    <!-- FullCalendar -->
    <script src="{{ URL::to('js/fullcalendar.min.js') }}"></script>

    <!-- toastr-->
     <script src="{{ URL::to('js/toastr.min.js') }}"></script>

  <!-- footer content -->
  <footer>
          <div class="pull-right">
          		  This Project Developed by Mohammad Ali & Mohammad Reza
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
</body>
</html>











