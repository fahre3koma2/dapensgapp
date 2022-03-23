@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Pembayaran Manfaat Pensiun Janda/Duda</h1>
      <ol class="breadcrumb">
        <li><a href="#">Pemohonan</a></li>
        <li><i class="fa fa-angle-right"></i>Pembayaran Manfaat Pensiun Janda/Duda</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            {{--  <h4 class="text-black">Data Laporan Berita Duka</h4>  --}}
            {{--  <p>Export data to Copy, CSV, Excel, PDF & Print</p>  --}}
             <div class="ml-auto">
                @php $idpensi = auth()->user()->id; @endphp
                <a href="{!! url('pensi/permohonan/dudajanda/form1', ['id' => encrypt($idpensi)]) !!}" class="btn btn-sm btn-primary">Tambah Permohonan</a>
            </div>
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th>No Permohonan</th>
                            <th>No Pensiun</th>
                            <th>Nama</th>
                            <th>Duda/Janda dari</th>
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
                             <td>{{$item->name_pensiun}}</td>
                            <td>{{$item->nohp}}</td>
                            <td>
                                @if ($item->status == 1)
                                <span class="label label-info">Dikirim</span>
                                @elseif ($item->status == 2)
                                <span class="label label-success">Sudah Diverifikasi</span>
                                @else
                                <span class="label label-warning">Belum Dikirim</span>
                                @endif

                            </td>
                            <td>
                                @if ($item->status)
                                {{--  <span class="label label-success">Admin</span>  --}}
                                @else
                                <a href="{!! route('pensi.permohonandudajanda-formedit1', ['id' => encrypt($item->id)]) !!}" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit </a>
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

