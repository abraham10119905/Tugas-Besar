<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        {{-- <link rel="shortcut icon" href="{{URL::asset('assets')}}/icon_abd.png"> --}}

        <title>Admin</title>

        <!-- Base Css Files -->
        <link href="{{URL::asset('assets/admin')}}/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{URL::asset('assets/admin')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="{{URL::asset('assets/admin')}}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
        <link href="{{URL::asset('assets/admin')}}/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- animate css -->
        <link href="{{URL::asset('assets/admin')}}/css/animate.css" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{URL::asset('assets/admin')}}/css/waves-effect.css" rel="stylesheet">

        <!-- DataTables -->
        <link href="{{URL::asset('assets/admin')}}/assets/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

        <!-- sweet alerts -->
        <link href="{{URL::asset('assets/admin')}}/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">

        <!--venobox lightbox-->
        <link rel="stylesheet" href="{{URL::asset('assets/admin')}}/assets/magnific-popup/magnific-popup.css"/>
        
        <!-- Dropzone css -->
        <link href="{{URL::asset('assets/admin')}}/assets/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

        <!-- Custom Files -->
        <link href="{{URL::asset('assets/admin')}}/css/helper.css" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/admin')}}/css/style.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{URL::asset('assets/admin')}}/js/modernizr.min.js"></script>
        
    </head>

    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        {{-- <a href="{{url('admin')}}" class="logo"><span><img src="{{URL::asset('assets')}}/logo_abd2.png" style="height: 55px; width: 130px;"> </span></a> --}}
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>
                            <div class="pull-left">
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Notification</li>
                                        <li class="list-group">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New user registered</div>
                                                    <p class="m-0">
                                                       <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{URL::asset('images/users/default.png')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="{{url('admin/account')}}"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                        <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
         


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <img src="{{URL::asset('images/users/default.png')}}" alt="" class="thumb-md img-circle">
                        </a>
                        </div>
                        <div class="user-info">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><font size="2">{{ Auth::user()->name }} </font></a>
                            </div>
                        </div>
                    </div>
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{ Route('dashboard') }}" class="waves-effect  {{{ (Request::is('admin') ? 'active' : '') }}}"><i class="md md-dashboard"></i>Dashboard</a>
                            </li>

                            <li>
                                <a href="{{ Route('cabang') }}" class="waves-effect  {{{ (Request::is('admin/cabang') ? 'active' : '') }}}"><i class="md md-home"></i>Cabang</a>
                            </li>

                            <li>
                                <a href="{{ Route('kendaraan') }}" class="waves-effect  {{{ (Request::is('admin/kendaraan') ? 'active' : '') }}}"><i class="fa fa-bicycle"></i>Kendaraan</a>
                            </li>

                             {{-- <li>
                                <a href="{{url('admin/gallery')}}" class="waves-effect  {{{ (Request::is('admin/gallery') ? 'active' : '') }}}"><i class="md md-image"></i><span> Gallery </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect 
                                {{ ( ((Request::is('admin/web'))||(Request::is('admin/users'))||(Request::is('admin/account')) ) ? 'active' : '') }} ">

                                    <i class="md md-settings"></i><span> Setting </span><span class="pull-right"><i class="md   md-add"></i></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('admin/account')}}"><i class="md md-account-box"></i>Account</a></li>
                                    <li><a href="{{url('admin/users')}}"><i class="md md-account-child"></i>Users</a></li>
                                    <li><a href="{{url('admin/web')}}"><i class="md md-account-balance"></i>Web</a></li>
                                </ul>
                            </li> --}}

                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->                   

            @yield('content')

                <footer class="footer primary text-center">
                    <marquee><font color="white"><b>Copyright © 2018 - Design and Developed by Fauzan Muhammad Abdussalam</b></font></marquee>
                </footer>

            </div>
        </div>
        <!-- END wrapper -->
    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  --> 
        <script src="{{URL::asset('assets/admin')}}/js/jquery.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/js/waves.js"></script>
        <script src="{{URL::asset('assets/admin')}}/js/wow.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="{{URL::asset('assets/admin')}}/js/jquery.scrollTo.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/chat/moment-2.2.1.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/jquery-detectmobile/detect.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/fastclick/fastclick.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="{{URL::asset('assets/admin')}}/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/sweet-alert/sweet-alert.init.js"></script>
        
        <!-- Page Specific JS Libraries -->
        <script src="{{URL::asset('assets/admin')}}/assets/dropzone/dropzone.min.js"></script>

        <!-- Examples -->
        <script src="{{URL::asset('assets/admin')}}/assets/magnific-popup/magnific-popup.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/jquery-datatables-editable/jquery.dataTables.js"></script> 
        <script src="{{URL::asset('assets/admin')}}/assets/datatables/dataTables.bootstrap.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/jquery-datatables-editable/datatables.editable.init.js"></script>

        <!-- flot Chart -->
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="{{URL::asset('assets/admin')}}/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{URL::asset('assets/admin')}}/js/jquery.app.js"></script>

        <!-- Dashboard -->
        <script src="{{URL::asset('assets/admin')}}/js/jquery.dashboard.js"></script>

        <!-- Chat -->
        <script src="{{URL::asset('assets/admin')}}/js/jquery.chat.js"></script>

        <!-- Todo -->
        <script src="{{URL::asset('assets/admin')}}/js/jquery.todo.js"></script>

         <!--Data Table -->
        <script src="{{URL::asset('assets/admin')}}/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="{{URL::asset('assets/admin')}}/assets/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

         <script type="text/javascript" src="{{URL::asset('assets/admin')}}/assets/gallery/isotope.js"></script>
        <script type="text/javascript" src="{{URL::asset('assets/admin')}}/assets/magnific-popup/magnific-popup.js"></script> 
          
        <script type="text/javascript">
            $(window).load(function(){
                var $container = $('.portfolioContainer');
                $container.isotope({
                    filter: '*',
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });

                $('.portfolioFilter a').click(function(){
                    $('.portfolioFilter .current').removeClass('current');
                    $(this).addClass('current');

                    var selector = $(this).attr('data-filter');
                    $container.isotope({
                        filter: selector,
                        animationOptions: {
                            duration: 750,
                            easing: 'linear',
                            queue: false
                        }
                    });
                    return false;
                }); 
            });
            $(document).ready(function() {
                $('.image-popup').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    mainClass: 'mfp-fade',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                    }
                });
            });
        </script>

        @if(Session::has('alert_swal'))
            <script type="text/javascript">{!! session('alert_swal') !!}</script>
        @endif
    

    </body>
</html>