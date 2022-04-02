@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Bukti Slip</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>Bukti Slip</li>
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
                    <div class="card-header bg-orange">
                    <h5 class="m-b-0">Bukti Slip Manfaat Pensiun</h5>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('pensi.buktislip') }}" method="get" id="form-filter" class="form-horizontal form-bordered">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">PIlih Bulan</label>
                            <div class="col-md-4">

                            <select class="form-control custom-select" onchange="filter()" name="bulan">
                                    <option value="" >-Pilih Bulan-</option>
                                @foreach($period as $dt)
                                    <option value="{!! date('m-Y', strtotime($dt)) !!}" >{{ Carbon\Carbon::parse($dt)->isoFormat('MMMM Y') }}</option>
                                @endforeach
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
                        <th scope="col" width="10%">Bulan-Tahun</th>
                        <th scope="col" width="20%">No Pensiun</th>
                        <th scope="col">Nama Pensiun</th>
                        {{--  <th scope="col" width="5%">Aksi</th>  --}}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ Carbon\Carbon::parse($year.'-'.$month.'-01')->isoFormat('MMMM Y')  }}</td>
                        <td>{{ $user->biodata->nopeserta }}</td>
                        <td>{{ $user->biodata->berhak }}</td>
                        {{--  <td> <a href="{{ url('/dapen/slipgaji/'.$month.'-'.$year.'/'.$user->biodata->nopeserta.'_MP'.$month.''.$year.'.pdf') }}" target="_blank" class="btn btn-sm btn-primary btn-block">Download</a> </td>  --}}
                        {{--  @if($month == '12')
                        <td> <a href="{{ url('/dapen/slipgaji/'.$month.'-'.$year.'/SLIPGAJI_DES'.$year.''.$user->biodata->nopeserta.'.pdf') }}" target="_blank" class="btn btn-sm btn-primary btn-block">Download</a> </td>
                        @elseif($month == '01')
                        <td> <a href="{{ url('/dapen/slipgaji/'.$month.'-'.$year.'/SLIPGAJI_JAN'.$year.''.$user->biodata->nopeserta.'.pdf') }}" target="_blank" class="btn btn-sm btn-primary btn-block">Download</a> </td>
                        @elseif($month == '02')
                        <td> <a href="{{ url('/dapen/slipgaji/'.$month.'-'.$year.'/SLIPGAJI_FEB'.$year.''.$user->biodata->nopeserta.'.pdf') }}" target="_blank" class="btn btn-sm btn-primary btn-block">Download</a> </td>
                        @elseif($month == '11')
                        <td> <a href="{{ url('/dapen/slipgaji/'.$month.'-'.$year.'/SLIPGAJI_NOV'.$year.''.$user->biodata->nopeserta.'.pdf') }}" target="_blank" class="btn btn-sm btn-primary btn-block">Download</a> </td>
                        @endif  --}}
                    </tr>
                    </tbody>
                </table>
                <center>
                <embed src="{{ url('/dapen/slipgaji/'.$month.'-'.$year.'/'.$user->biodata->nopeserta.'_MP'.$month.''.$year.'.pdf') }}" width="800" height="320"></embed>
                <center>
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

