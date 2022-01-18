@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>List Pengkinian Data</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>List Pengkinian Data</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
             <div class="ml-auto">
                <a href="{!! url('pensi/pensiun/'.encrypt($user).'/edit') !!}" class="btn btn-sm btn-primary">Tambah File</a>
            </div>
            <div class="table-responsive">
                @if($biodata)
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th>No Pensiun</th>
                            <th>Nama</th>
                            <th>No Handphone</th>
                            <th>Tanggal Update</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($biodata as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nopeserta}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nohp}}</td>
                            <td>
                                {{ Carbon\Carbon::parse($item->update_at)->isoFormat('D MMMM Y')}}
                                {{--  @if ($item->status)
                                <span class="label label-info">Selesai</span>
                                @else
                                <span class="label label-success">Diproses</span>
                                @endif  --}}

                            </td>
                            <td>
                                @if ($item->status)
                                    <span class="label label-success">Download</span>
                                @endif
                            </td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
                @endif
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

