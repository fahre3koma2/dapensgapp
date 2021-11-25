@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Sejarah Pendirian</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> Sejarah Pendirian</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="card">
      <div class="card-body">
        <div class="row">
           <div class="col-lg-8">
            <h4 class="text-black">Sejarah Pendirian</h4>
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa </li>
            </ul>
          </div>
          <div class="col-lg-4">
              <a href="" class="btn btn-nor btn-warning pull-right">Edit</a>
          </div>
        </div>
        </div>
      </div>
      </div>
      <!-- Main row -->
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

