@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Konten Artikel</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> Konten Artikel</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
    <!-- /.col -->
    <div class="col-lg-12">
        <div class="card">
        <div class="card-body">
        <div class="box-body">
            <div class="right-page-header">
            <div class="d-flex">
                <div class="align-self-center">
                    <h4 class="text-black m-b-1">Konten Artikel </h4>
                </div>
                <div class="ml-auto">
                    <a href="{!! url('admin/artikel/create') !!}" class="btn btn-sm btn-primary btn-block">Tambah File</a>
                </div>
            </div>
            </div>
            <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover no-wrap">
                <thead>
                <tr>
                    <th>No.</th>
                    <th width="25%">Judul</th>
                    <th width="20%">File</th>
                    <th width="30%">Kategori</th>
                    <th width="15%">Status</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach ($konten as $item)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $item->konten}}</td>
                        <td><img src="{{ url('webprof/images/dapen/'.$item->file) }}" width="26%"></td>
                        <td>{{ $item->keterangan }}</td>
                        <td><span class="label label-success">{{ $item->status }}</span></td>
                        <td><a type="button" class="btn btn-default"> <i class="icon-note" aria-hidden="true"></i> </a></td>
                    </tr>
                @php $no++; @endphp
                @endforeach
            </table>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- /.col -->
    </div>
    <!-- Main row -->
</div>
@endsection
@section('injs')
    <!-- Morris JavaScript -->
    <script src="{{ url('dist/plugins/raphael/raphael-min.js') }}"></script>
    <script src="{{ url('dist/plugins/morris/morris.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/dashboard1.js') }}"></script>

    <!-- DataTable -->
    <script src="{{ url('dist/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('dist/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
    </script>
@endsection
