<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.layouts.adminhead')
</head>
<body class="skin-orange sidebar-mini">
<div class="wrapper boxed-wrapper">
  <header class="main-header">
    <!-- Logo -->
    {{--  <a href="{!! url('home') !!}" class="logo orange-bg">  --}}
    <a href="{!! url('home') !!}" class="logo orange-bg">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{ url('dist/img/logo-n.png') }}" alt=""></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{ url('dist/img/logo.png') }}" alt=""></span> </a>
    <!-- Header Navbar -->
    {{--  <nav class="navbar orange-bg navbar-static-top">  --}}
         <nav class="navbar orange-bg navbar-static-top">
      <!-- Sidebar toggle button-->

      {{--  <div class="pull-left search-box">
        <form action="#" method="get" class="search-form">
          <div class="input-group">
            <input name="search" class="form-control" placeholder="" type="text">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i> </button>
            </span></div>
        </form>
        <!-- search form --> </div>  --}}
        @if (auth()->user()->biodataupdate)
            @php $bio = 'biodataupdate'; @endphp
        @else
            @php $bio = 'biodata'; @endphp
        @endif

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications  -->
          {{--  <li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 12 <i class="fa fa-bell-o"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu">
                  <li><a href="#">
                    <div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
                    <h4>Alex C. Patton</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
                    <h4>Nikolaj S. Henriksen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">1:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
                    <h4>Kasper S. Jessen</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">9:30 AM</span></p>
                    </a></li>
                  <li><a href="#">
                    <div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
                    <h4>Florence S. Kasper</h4>
                    <p>I've finished it! See you so...</p>
                    <p><span class="time">11:10 AM</span></p>
                    </a></li>
                </ul>
              </li>
              <li class="footer"><a href="#">Check all Notifications</a></li>
            </ul>
          </li>  --}}
          <!-- User Account  -->
          <li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                @if(auth()->user()->{$bio}->file)
                    <img src="{{ url('dapen/foto/'.auth()->user()->biodata->file) }}" class="user-image" alt="User Image">
                @else
                    <img src="{{ url('dist/img/img1.jpg') }}" class="user-image" alt="User Image">
                @endif
              <span class="hidden-xs">{{ auth()->user()->{$bio}->name }}</span> </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <div class="pull-left user-img">
                    @if(auth()->user()->{$bio}->file)
                        <img src="{{ url('dapen/foto/'.auth()->user()->biodata->file) }}" class="img-responsive img-circle" alt="User">
                    @else
                        <img src="{{ url('dist/img/img1.jpg') }}" class="img-responsive img-circle" alt="User">
                    @endif
                </div>
                <p class="text-left">{{ auth()->user()->{$bio}->name }} </p>
              </li>
              <li><a href="#"><i class="icon-profile-male"></i> My Profile</a></li>
              <li role="separator" class="divider"></li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  {{-- <aside class="main-sidebar">
    <!-- sidebar -->
    <div class="sidebar">
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree"> --}}
    <div class="main-nav">
        <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>

            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
            @php $idpensi = encrypt(auth()->user()->id); @endphp
            @if (Auth::user()->roles[0]->name == 'Admin')
                @include('admin.layouts.menuadmin')
            @endif
            @if (Auth::user()->roles[0]->name == 'User')
                @include('admin.layouts.menuuser')
            @endif
            @if (Auth::user()->roles[0]->name == 'Pensiunan')
                @include('admin.layouts.menupensi')
            @endif

            </ul>
        </nav>
    </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @yield('breadcrumb')

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2021 DapenSG App. All rights reserved.</footer>
</div>
<!-- ./wrapper -->

@include('admin.layouts.adminjs')

</body>

</html>
