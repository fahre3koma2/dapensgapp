@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>{{$judul}}</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>{{$judul}}</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
             <div class="ml-auto">
                @php $idpensi = auth()->user()->id; @endphp
                <a href="{!! route('admin.seting-periode.create') !!}" class="btn btn-sm btn-warning">Tambah Periode</a>
            </div>
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th>Periode 1</th>
                            <th>Tanggal Awal</th>
                            <th>Tanggal Akhir</th>
                            <th>Periode 1</th>
                            <th>Tanggal Awal</th>
                            <th>Tanggal Akhir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($mohon as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->periode1}}</td>
                            <td>{{$item->tgl_awal1}}</td>
                            <td>{{$item->tgl_akhir1}}</td>
                            <td>{{$item->periode2}}</td>
                            <td>{{$item->tgl_awal2}}</td>
                            <td>{{$item->tgl_akhir2}}</td>
                            <td>
                            @if(date('Y') == $item->tahun)
                                <a href="{!! route('admin.seting-periode.edit', ['id' => encrypt($item->id)]) !!}" class="btn btn-sm btn-warning">Edit</a>
                            @endif
                            </td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>

         </div>
    </div>
</div>
@endsection
@section('injs')
    <!-- DataTable -->
    <script src="{{ url('dist/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('dist/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
        })
    })
    </script>

    <script src="{{ url('dist/plugins/table-expo/filesaver.min.js') }}"></script>
    <script src="{{ url('dist/plugins/table-expo/xls.core.min.js') }}"></script>
    <script src="{{ url('dist/plugins/table-expo/tableexport.js') }}"></script>
    {{--  <script>
    $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
    </script>  --}}
@endsection

