<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    {{-- <link href="{{URL::asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> --}}
    <!-- NProgress -->
    {{-- <link href="{{URL::asset('gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet"> --}}
    <!-- iCheck -->
    {{-- <link href="{{URL::asset('gentelella/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet"> --}}
	
    <!-- bootstrap-progressbar -->
    {{-- <link href="{{URL::asset('gentelella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"> --}}
    <!-- JQVMap -->
    {{-- <link href="{{URL::asset('gentelella/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet')}}"/> --}}
    <!-- bootstrap-daterangepicker -->
    {{-- <link href="{{URL::asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet"> --}}

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('gentelella/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"> <span>Violência Zero!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              <img src="{{URL::asset('imgs/logocesmac.png')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, CESMAC</span>
                <h2> <p style="color:white;">
                  @if (session('usuario'))
                  {{ session('usuario') }}
                  @endif</p></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

         @include('menu');

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                    CESMAC
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="Network Activities"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                     <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Usuários</span>
            <div class="count">{{$allAuthorReports}}</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Denúncias</span>
            <div class="count">{{$allReports}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Uploads</span>
            <div class="count green">{{$allUploads}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Vítimas</span>
              <div class="count">{{$allReportsVictim}}</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Testemunhas</span>
            <div class="count">{{$allReportsWitness}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Denuncias Anônimas</span>
            <div class="count">{{$allAnonymousrReports}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

      
          <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>App Versions</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>Grau de Relacionamento com Vítimas</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Amigo</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$percentFriend}}%;">
                          <span style = "color: black">{{$percentFriend}}%</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                    <span>{{$allFriend}}</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Professor</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$percentTeacher}}%;">
                      <span style="color: black">{{$percentTeacher}}%</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                    <span>{{$allTeacher}}</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Familiar</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$percentFamily}}%;">
                          <span style="color: black">{{$percentFamily}}%</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                    <span>{{$allFamily}}</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>Outros</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$percentOthers}}%;">
                          <span style="color: black">{{$percentOthers}}%</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                    <span>{{$allOthers}}</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Device Usage</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>Venda de Bebidas Alc. </p>
                            </td>
                          <td>{{$allViolationTypeSaleofAlcoholicBeverages}}</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Bullying </p>
                            </td>
                          <td>{{$allViolationTypeBullying}}</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Exploração Sexual </p>
                            </td>
                          <td>{{$allViolationTypeSexualExploitation}}</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Trabalho Infantil </p>
                            </td>
                            <td>{{$allViolationTypeChildLabor}}</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Automutilação </p>
                            </td>
                          <td>{{$allViolationTypeSelfMutilation}}</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Quick Settings</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <div class="sidebar-widget">
                        <h4>Profile Completion</h4>
                        <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                        <div class="goal-wrapper">
                          <span id="gauge-text" class="gauge-value pull-left">0</span>
                          <span class="gauge-value pull-left">%</span>
                          <span id="goal-text" class="goal-value pull-right">100%</span>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


        

    <!-- jQuery -->
    <script src="{{URL::asset('gentelella/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{URL::asset('gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    {{-- <script src="{{URL::asset('gentelella/vendors/fastclick/lib/fastclick.js')}}"></script> --}}
    <!-- NProgress -->
    {{-- <script src="{{URL::asset('gentelella/vendors/nprogress/nprogress.js')}}"></script> --}}
    <!--  Device Usage bootstrap-progressbar Chart.js -->
    <script src="{{URL::asset('gentelella/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- Profile Completion.js -->
    <script src="{{URL::asset('gentelella/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- Device Usage bootstrap-progressbar -->
    <script src="{{URL::asset('gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    {{-- <script src="{{URL::asset('gentelella/vendors/iCheck/icheck.min.js')}}"></script> --}}
    <!-- Skycons -->
    {{-- <script src="{{URL::asset('gentelella/vendors/skycons/skycons.js')}}"></script> --}}
    <!-- Flot -->
    {{-- <script src="{{URL::asset('gentelella/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/Flot/jquery.flot.resize.js')}}"></script> --}}
    <!-- Flot plugins -->
    {{-- <script src="{{URL::asset('gentelella/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/flot.curvedlines/curvedLines.js')}}"></script> --}}
    <!-- DateJS -->
    {{-- <script src="{{URL::asset('gentelella/vendors/DateJS/build/date.js')}}"></script> --}}
    <!-- JQVMap -->
    {{-- <script src="{{URL::asset('gentelella/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script> --}}
    <!-- bootstrap-daterangepicker -->
    {{-- <script src="{{URL::asset('gentelella/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{URL::asset('gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script> --}}

    <!-- Custom Theme Scripts -->
    <script src="{{URL::asset('gentelella/build/js/custom.min.js')}}"></script>
	
  </body>
</html>
