<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    
    <link href="{{ url('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/jquery-ui.structure.min.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ url('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ url('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{url('vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- Switchery -->
    <link href="{{url('vendors/switchery/switchery.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{url('build/css/custom.css')}}" rel="stylesheet">
    <!-- jQuery -->
    <script src="{{ url('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ url('js/jquery-ui.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ url('vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{ url('vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <!-- validator -->
    <script src="{{ url('vendors/validator/validator.js')}}"></script>
 
    <!-- bootstrap-progressbar -->
    <script src="{{ url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{ url('vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{ url('vendors/skycons/skycons.js')}}"></script>
    <!-- Switchery -->
    <script src="{{ url('vendors/switchery/switchery.js') }}"></script>
    <!-- Flot -->
    <script src="{{ url('vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ url('vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{ url('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{ url('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{ url('vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ url('vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <!-- Datatables -->
    <script src="{{ url('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
    <script src="{{ url('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ url('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ url('vendors/pdfmake/build/vfs_fonts.js')}}"></script>  
    <!-- Datatables -->
    <!-- bootstrap-daterangepicker -->
    <script src="{{ url('js/moment/moment.min.js') }}"></script>
    <script src="{{ url('js/datepicker/daterangepicker.js') }}"></script>

    <script type="text/javascript">
        $('#datatable-responsive_length').css("display","none");
    </script>
    
  </head>

  <body class="nav-md">
  <style>
  #confirm{
    background-color: #FE5A31;
    border-color: #f14d08;
    color: #fff;
    outline: none;
    transition: 0.5s;
  }
  #confirm:hover{
    background-color: #f14d08;
    border-color: #FE5A31;
  }
</style>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img style="width:200px;height:30px;" src="{{ url('images/logo.png') }}"></a>
            </div>

            <div class="clearfix"></div>

            <!-- sidebar menu -->
            <div style="margin-top:10px;"  id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 
                  <li><a href="{{ url('dashboard/reservations') }}"><i class="fa fa-list"></i> Reservations </a>
                  </li>
                  <li><a href="{{ url('dashboard/contrats') }}"><i class="fa fa-file-o"></i> Contrats</a>
                  </li>
                   <li><a href="{{ url('dashboard/clients') }}"><i class="fa fa-users"></i> Clients</a>
                    
                  </li>
                   <li><a href="{{ url('dashboard/cars') }}"><i class="fa fa-car"></i>Voitures</a>

                  </li>
                  
                 
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

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
              <a href={{ url('auth/logout') }} data-toggle="tooltip" data-placement="top" title="Logout">
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
              <div class="nav toggle" style="margin-bottom: 10px;">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <span class="green">ONERENTCAR</span> - by <a href="https://facebook.com/amine1bioudi">Bioudi Amine</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
    <!-- Custom Theme Scripts -->
    <script src="{{ url('build/js/custom.js')}}"></script>
    
  </body>
</html>
