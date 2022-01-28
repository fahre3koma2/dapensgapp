@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Permohonan Pembayaran Manfaat Pensiun</h1>
      <ol class="breadcrumb">
        <li><a href="#">Pemohonan</a></li>
        <li><i class="fa fa-angle-right"></i>Permohonan Pembayaran Manfaat Pensiun</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th>No Permohonan</th>
                            <th>No Pensiun</th>
                            <th>Nama</th>
                            <th>No Handphone</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($mohon as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->idperm_karyawan}}</td>
                            <td>{{$item->nopeserta}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nohp}}</td>
                            <td>
                                @if ($item->status == 1)
                                <span class="label label-danger">Belum Verifikasi</span>
                                @else
                                <span class="label label-success">Sudah Verifikasi</span>
                                @endif
                            </td>
                            <td>
                                @if ($item->status == 1)
                                 <a href="{!! route('admin.permohonan.verifikasi', ['id' => encrypt($item->id) , 'jenis' => 'normal']) !!}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Verifikasi </a>
                                @else

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

