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
            <div class="card">
                <div class="card-body box-rounded box-gradient-3"> <span class="info-box-icon bg-transparent"></span>
                    <div class="info-box-content">
                        <center>
                        <h1 class="text-white">Selamat Datang di Aplikasi ...</h1>
                        <h3 class="info-box-text text-white">Dana Pensiun Semen Gresik</h3>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br/>
        @if (auth()->user()->biodataupdate)
            @php $bio = 'biodataupdate'; @endphp
        @else
            @php $bio = 'biodata'; @endphp
        @endif
        <center>
        <div class="row-center">
        <div class="col-lg-4">
          <div class="user-profile-box m-b-12">
            <div class="box-profile text-white">
                @if(auth()->user()->{$bio}->file)
                    <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dapen/foto/'.auth()->user()->biodata->file) }}" alt="User profile picture">
                @else
                    <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dist/img/img1.jpg') }}" alt="User profile picture">
                @endif
              <h3 class="profile-username text-center">{{ auth()->user()->{$bio}->name }}</h3>
              <p class="text-center">{{ auth()->user()->{$bio}->email }}</p>
              <p class="text-center">{{ auth()->user()->{$bio}->nopeserta }}</p>
            </div>
          </div>
        </div>
      <!-- /.row -->
    </div>
</center>
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

