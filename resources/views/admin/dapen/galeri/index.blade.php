@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Konten Galeri</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> Konten Galeri</li>
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
                    <h4 class="text-black m-b-1">Konten Galeri</h4>
                </div>
                <div class="ml-auto">
                    <a href="{!! url('admin/galeri/create') !!}" class="btn btn-sm btn-primary btn-block">Tambah Galeri</a>
                </div>
            </div>
            </div>
            <div class="table-responsive">
            <table id="example2" class="table table-bordered table-hover no-wrap">
                <thead>
                <tr>
                    <th>No.</th>
                    <th width="60%">Judul</th>
                    <th width="25%">Gambar</th>
                    <th width="10%">Action</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach ($konten as $item)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $item->judul}}</td>
                        <td><img src="{{ url('/dapen/galeri/'.$item->file) }}" width="32%"></td>
                        <td>
                            <button type="button" data-id="{{ $item->id }}" data-file="{{$item->id}}" class="btn btn-sm btn-danger btn-block delete">Hapus</button>
                                {{ Form::open(['url'=>route('admin.galeri.destroy', [Crypt::encrypt($item->id)]), 'method'=>'delete', 'id' => $item->id, 'style' => 'display: none;']) }}
                                {{ csrf_field() }}
                                {{ Form::close() }}
                        </td>
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
    <script src="{{ url('dist/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

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

    $("body").on("click", ".delete", function (e) {
        e.preventDefault();
        var id = $(this).data('id');

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Anda akan menghapus data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes",
            cancelButtonText: "No"
        }).then((result) => {
            if (result.value) {
                Swal.close();
                $("#"+id).submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire('Dibatalkan', 'Data batal dihapus', 'error');
            }
        });
    });
    </script>
@endsection
