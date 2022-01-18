@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Bukti Potong Pajak</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>Bukti Potong Pajak</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="row m-t-3">
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-blue">
                    <h5 class="m-b-0">Bukti Potong Pajak </h5>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('pensi.buktipajak') }}" method="get" id="form-filter" class="form-horizontal form-bordered">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">PIlih Bulan</label>
                            <div class="col-md-4">

                            <select class="form-control custom-select" onchange="filter()" name="tahun">
                                <option value="" >-Pilih Tahun-</option>
                                    <option value="2021" >2021</option>
                                     <option value="2022" >2022</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div><br/>
        <div class="card-body">
             <div class="col-lg-12">
                <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" width="5%">No</th>
                        <th scope="col" width="20%">No Pensiun</th>
                        <th scope="col">Nama Pensiun</th>
                        <th scope="col" width="5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $tahun }}</td>
                        <td>{{ $user->biodata->name }}</td>
                        <td> <a href="{{ url('/dapen/buktipotong/'.$tahun.'/'.$user->biodata->nopeserta.'_BUPOT'.$tahun.'.pdf') }}" target="_blank" class="btn btn-sm btn-primary btn-block">Download</a> </td>
                    </tr>
                    </tbody>
                </table>
                </div>
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
    <script>

    function filter(){
        $('#form-filter').submit();
    }

    </script>
@endsection

