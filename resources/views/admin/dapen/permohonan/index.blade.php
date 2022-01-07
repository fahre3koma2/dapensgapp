@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Permohonan ...</h1>
      <ol class="breadcrumb">
        <li><a href="#">Pemohonan</a></li>
        <li><i class="fa fa-angle-right"></i>Permohonan ...</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
                <div class="alert alert-danger" role="alert"> Tidak Ada Pemohonan </div>
            {{--  <h4 class="text-black">Data Laporan Berita Duka</h4>  --}}
            {{--  <p>Export data to Copy, CSV, Excel, PDF & Print</p>  --}}
            {{--  <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>No Laporan</th>
                        <th>No Pensiun</th>
                        <th>Nama Peserta</th>
                        <th>Tanggal Meninggal</th>
                        <th>No Telp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($berita as $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nolaporan}}</td>
                            <td>{{$item->nopensiun}}</td>
                            <td>{{$item->nama_peserta}}</td>
                            <td>{{$item->tgl_meninggal}}</td>
                            <td>{{$item->notelp}}</td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>  --}}

            {{--  @endif  --}}
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

