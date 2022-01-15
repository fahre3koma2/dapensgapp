@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Pengkinian Data</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>Pengkinian Data</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            @if($users->isEmpty())
                <div class="alert alert-danger" role="alert"> Tidak Ada Pengkinian Data </div>
            @else
            <h4 class="text-black">Data Pengkinian Data</h4>
            {{--  <p>Export data to Copy, CSV, Excel, PDF & Print</p>  --}}
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th width="20%">No Peserta</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Update Terakhir</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; $ur = 1; $jenis = [ 'A' => 'Anak', 'C' => 'Cacat', 'D' => 'Dipercepat' , 'J' => 'Janda', 'N' => 'Normal', 'T' => 'Tunda Bayar', 'U' => 'Duda']; @endphp
                        @foreach ($users as $value)
                        @php $tgl = $value->biodata->updated_at->addDays(5); $tgl = date_format($tgl,'Y-m-d'); @endphp
                        {{--  @if ((date('Y-m-d') < $tgl) && ($value->biodata->baru == 1))  --}}
                        @if($value->biodata->baru == 1)
                            <tr class="text-success">
                        @else
                            <tr>
                        @endif
                            <td>{{ $no++ }}</td>
                            <td>{{ $value->nopeserta }} </td>
                            <td>{{ $value->name }} </td>
                            <td>{{ $value->biodata->email }} </td>
                            <td>{{ $value->biodata->updated_at }} </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="{{ route('admin.cetakpengkiniandata', ['id' => encrypt($value->id)]) }}"><i class="fa fa-print"></i> Print</a>
                                {{--  <a class="btn btn-sm btn-info" href="{{ route('admin.pensi-edit', ['id' => encrypt($value->id)]) }}"><i class="fa fa-edit"></i> Edit</a>  --}}
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>

            @endif
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

