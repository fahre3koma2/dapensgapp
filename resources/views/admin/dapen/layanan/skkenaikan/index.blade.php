@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>SK Kenaikan MP</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>SK Kenaikan MP</li>
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
                    <h5 class="m-b-0">SK Kenaikan MP </h5>
                    </div>
                    <div class="card-body">
                    <form action="#" class="form-horizontal form-bordered">
                        <div class="form-group row">
                            <label class="control-label text-right col-md-3">PIlih Bulan</label>
                            <div class="col-md-4">
                            @php $lebih = date('m', strtotime('+3 month')); $kurang = date('m', strtotime('-3 month')) @endphp
                            <select class="form-control custom-select">
                                @foreach ($bulan as $item => $bul )
                                    <option value="{{ $item }}" >{{$bul}}</option>
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
                        <th scope="col" width="20%">No Pensiun</th>
                        <th scope="col">Nama Pensiun</th>
                        <th scope="col" width="5%">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>nopeserta</td>
                        <td>namapeserta</td>
                        <td> <a href="{!! url('download/buktislip') !!}" class="btn btn-sm btn-primary btn-block">Download</a> </td>
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
@endsection

