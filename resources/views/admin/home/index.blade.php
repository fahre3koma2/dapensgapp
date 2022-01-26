@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Modern Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Modern Dashboard</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="row">
        <div class="col-lg-3">
            <div class="tile-progress tile-pink">
            <div class="tile-header">
                <h5>Pengkinian Data</h5>
                <h3> {{  $dash['pengkinian'] }}</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="100%" style="width: 100%;"></span> </div>
            <div class="tile-footer">
                <h4> <span class="pct-counter"></span> </h4>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="tile-progress tile-red">
            <div class="tile-header">
                <h5>Permohonan</h5>
                <h3>0</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="100%" style="width: 100%;"></span> </div>
            <div class="tile-footer">
                <h4> <span class="pct-counter"></span> </h4>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="tile-progress tile-cyan">
            <div class="tile-header">
                <h5>Penerbitan Surat Keterangan</h5>
                <h3>{{ $dash['sk'] }}</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="100%" style="width: 100%;"></span> </div>
            <div class="tile-footer">
                <h4> <span class="pct-counter"></span> </h4>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="tile-progress tile-aqua">
            <div class="tile-header">
                <h5>Berita Duka</h5>
                <h3>{{ $dash['berduk'] }}</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="100%" style="width: 100%;"></span></div>
            <div class="tile-footer">
                 <h4> <span class="pct-counter"></span> </h4>
            </div>
            </div>
        </div>
        </div>
        <br/><br/><br/><br/><br/><br/><br/>
        <br/><br/><br/><br/>
        <!-- /.row -->

    </div>
@endsection
@section('injs')
    <!-- Morris JavaScript -->
    <script src="{{ url('dist/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ url('dist/plugins/morris/morris.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/dashboard1.js') }}"></script>

    <!-- Chart Peity JavaScript -->
    <script src="{{ url('dist/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/jquery.peity.init.js') }}"></script>
@endsection

