<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Boltech</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
<!-- AdminLTE -->
<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
<!-- AdminLTE Skins -->
<link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.min.css') }}">

<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


        <style>
  body {
    margin: 0;
    overflow: hidden; /* Prevent body scroll when header and aside are fixed */
  }

  .wrapper {
    display: flex;
    flex-direction: column;
    height: 100vh; /* Full viewport height */
  }

  .main-header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1000;
  }

  .main-sidebar {
    position: fixed;
    top: 50px; /* Adjust based on header height */
    bottom: 0;
    width: 230px; /* Sidebar width */
    overflow-y: auto;
  }

  .content-wrapper {
    margin-top: 50px; /* Height of the header */
    height: calc(100vh - 50px); /* Full height minus header */
    padding: 20px;
  }
</style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="/dashboard" class="logo" style="background: #0073b7">
      <span class="logo-mini"><b>B T</b></span>
      <span class="logo-lg"><b>Boltech</b> Dashboard</span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- /.messages-menu -->

          <!-- Notifications Menu -->

          <!-- Tasks Menu -->

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/avatar-15.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/avatar-15.png" class="img-circle" alt="User Image">

                <p>
                {{Auth::user()->name}}
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                <a href="{{ route('logout') }}"  class="btn btn-default btn-flat"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar bg-blue">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <div class="sidebar-logo text-center" style="padding: 15px;">
            <a href="/dashboard">
                <img src="" alt="Boltech Logo" style="max-width: 100%; height: auto;">
            </a>
        </div>

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel" style="background:white">
            <div class="pull-left image">
                <img src="dist/img/avatar-15.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p style="color:black">{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a style="color:black" href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('topics') ? 'active' : '' }}">
                <a href="/topics">
                    <i class="fa fa-book"></i> <span>Manage Topics</span>
                </a>
            </li>
            <li class="{{ request()->is('subtopics') ? 'active' : '' }}">
                <a href="/subtopics">
                    <i class="fa fa-book"></i> <span>Manage SubTopics</span>
                </a>
            </li>

            <li class="{{ request()->is('users') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}">
                    <i class="fa fa-users"></i> <span>User Management</span>
                </a>
            </li>

            <li class="{{ request()->is('logs') ? 'active' : '' }}">
                <a href="/logs">
                    <i class="fa fa-file-text"></i> <span>Logs</span>
                </a>
            </li>
            <!-- <li class="{{ request()->is('settings') ? 'active' : '' }}">
                <a href="/settings">
                    <i class="fa fa-cogs"></i> <span>Settings</span>
                </a>
            </li> -->
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>

        <!-- Sidebar Footer -->

    </section>
    <!-- /.sidebar -->
</aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="flex-1 bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif

            <!-- Page Content -->
            <main class="p-6 mt-16">
                {{ $slot }}
            </main>
    <!-- Main content -->

    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- JavaScript Libraries -->
<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js') }}"></script>

<script>
    // Resolve conflict in jQuery UI tooltip with Bootstrap tooltip
    $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<script src="bower_components/chart.js/Chart.js"></script>

<!-- Optional Scripts -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
