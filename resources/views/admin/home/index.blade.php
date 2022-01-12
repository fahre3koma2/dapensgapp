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
                <h5>SK Penetapan Manfaat</h5>
                <h3>1250</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="65.5%" style="width: 65.5%;"></span> </div>
            <div class="tile-footer">
                <h4> <span class="pct-counter">65.5</span>% increase </h4>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="tile-progress tile-red">
            <div class="tile-header">
                <h5>Bukti Slip Manfaat Pensiun</h5>
                <h3>850</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="70%" style="width: 70%;"></span> </div>
            <div class="tile-footer">
                <h4> <span class="pct-counter">70</span>% increase </h4>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="tile-progress tile-cyan">
            <div class="tile-header">
                <h5>Penerbitan Surat Keterangan</h5>
                <h3>2250</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="50%" style="width: 50%;"></span> </div>
            <div class="tile-footer">
                <h4> <span class="pct-counter">50</span>% increase </h4>
            </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="tile-progress tile-aqua">
            <div class="tile-header">
                <h5>Feedbacks</h5>
                <h3>530</h3>
            </div>
            <div class="tile-progressbar"> <span data-fill="75.5%" style="width: 75.5%;"></span> </div>
            <div class="tile-footer">
                <h4> <span class="pct-counter">75.5</span>% increase </h4>
            </div>
            </div>
        </div>
        </div>
        <!-- /.row -->

        <div class="row">
        <div class="col-lg-8">
            <div class="info-box">
            <div class="col-12">
                <div class="d-flex flex-wrap">
                <div>
                    <h5>Yearly Earning</h5>
                </div>
                <div class="ml-auto">
                    <ul class="list-inline">
                    <li class="text-green"> <i class="fa fa-circle"></i> Sales</li>
                    <li class="text-blue"> <i class="fa fa-circle"></i> Earning ($)</li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 m-b-3">
                <div id="earning"></div>
                </div>
                <div class="col-lg-3 m-t-5">
                <div class="m-b-5 text-center"> <i class="icon-bargraph f-40 m-b-2 text-blue"></i>
                    <h6 class="f-14">Sales</h6>
                    <h4>5,650</h4>
                </div>
                <div class="m-b-5 text-center"> <i class="icon-strategy f-40 m-b-2 text-blue"></i>
                    <h6 class="f-14">Earning</h6>
                    <h4>$ 13,500</h4>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="info-box">
            <div class="col-12">
                <div class="d-flex flex-wrap">
                <div>
                    <h5 class="m-b-15">Statistics</h5>
                </div>
                </div>
            </div>
            <div class="col-lg-10 m-auto m-top-40 m-bot-10">
                <div id="donut"></div>
            </div>
            <div class="row">
                <div class="col-xl-4 m-b-2 text-center">
                <h6 class="f-14">In Store</h6>
                <h4>9,500</h4>
                </div>
                <div class="col-xl-4 m-b-2 text-center">
                <h6 class="f-14">Mail Order</h6>
                <h4>3,500</h4>
                </div>
                <div class="col-xl-4 m-b-2 text-center">
                <h6 class="f-14">New Order</h6>
                <h4>1,500</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
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

