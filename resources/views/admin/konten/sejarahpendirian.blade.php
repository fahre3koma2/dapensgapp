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
           <div class="col-lg-12">
            <h4 class="text-black">Sejarah Pendirian</h4>
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>{{ $sejarah->keterangan }}</td>
                        <td> <a href="{{ url('admin/konten/visimisiedit/'.$sejarah->id.'/sejarah') }}" class="btn btn-nor btn-warning pull-right">Edit</a> </td>
                    </tr>
                </tbody>
            </table>
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

