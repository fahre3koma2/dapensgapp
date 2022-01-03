@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Home</h1>
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> Home</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="tile-progress tile-aqua">
            <div class="tile-header"><center>
              <h5>Dana Pensiun Semen Gresik</h5>
              <h2>Selamat Datang di Aplikasi ...</h2> </center>
            </div>
            <div class="tile-progressbar"> <span data-fill="100%" style="width: 100%;"></span> </div>
            <div class="tile-footer">
              {{-- <h4>Dana Pensiun Semen Gresik</h4> --}}
            </div>
           </div>
        </div>
        <div class="col-lg-4">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white">
                @if(auth()->user()->biodata->file)
                    <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dapen/foto/'.auth()->user()->biodata->file) }}" alt="User profile picture">
                @else
                    <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dist/img/img1.jpg') }}" alt="User profile picture">
                @endif
              <h3 class="profile-username text-center">{{ auth()->user()->name }}</h3>
              <p class="text-center">{{ auth()->user()->biodata->email }}</p>
              <p class="text-center"> <a href="{!! url('pensi/uploadfoto') !!}" class="btn btn-sm btn-primary"><i class="fa fa-file-photo-o"></i> Upload Foto</a> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body box-rounded box-gradient"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
                <div class="info-box-content">
                    <h6 class="info-box-text text-white">New Orders</h6>
                    <h1 class="text-white">5,500</h1>
                    <span class="progress-description text-white"> 70% Increase in 30 Days </span> </div>
                </div>
            </div><br>
            <div class="card">
                <div class="card-body box-rounded box-gradient-4"> <span class="info-box-icon bg-transparent"><i class="ti-face-smile text-white"></i></span>
                <div class="info-box-content">
                    <h6 class="info-box-text text-white">New Users</h6>
                    <h1 class="text-white">2,040</h1>
                    <span class="progress-description text-white"> 45% Increase in 30 Days </span> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body box-rounded box-gradient-3"> <span class="info-box-icon bg-transparent"><i class="ti-money text-white"></i></span>
                <div class="info-box-content">
                    <h6 class="info-box-text text-white">Total Profit</h6>
                    <h1 class="text-white">$ 8,590</h1>
                    <span class="progress-description text-white"> 45% Increase in 30 Days </span> </div>
                </div>
            </div><br>
            <div class="card">
                <div class="card-body box-rounded box-gradient-2"> <span class="info-box-icon bg-transparent"><i class="ti-stats-up text-white"></i></span>
                <div class="info-box-content">
                    <h6 class="info-box-text text-white">New Orders</h6>
                    <h1 class="text-white">5,500</h1>
                    <span class="progress-description text-white"> 70% Increase in 30 Days </span> </div>
                </div>
            </div>
        </div>
        </div>

      <!-- /.row -->
    </div>
@endsection
@section('injs')
    <!-- Chart Peity JavaScript -->
    <script src="{{ url('dist/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/jquery.peity.init.js') }}"></script>

    <!-- Chartist JavaScript -->
    <script src="{{ url('dist/plugins/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ url('dist/plugins/chartist-js/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/chartist-init.js') }}"></script>
@endsection

