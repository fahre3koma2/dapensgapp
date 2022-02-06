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
            <div class="ml-auto text-center">
                <h3 class="text-black"> Pengkinian Data</h3>
                <p> Pengkinian Data dari Tanggal  {{ Carbon\Carbon::parse($jadwal->tgl_awal)->isoFormat('D MMMM Y')}} sampai tanggal {{ Carbon\Carbon::parse($jadwal->tgl_akhir)->isoFormat('D MMMM Y')}} </p>
                @if((date('Y-m-d') >= $jadwal->tgl_awal) && (date('Y-m-d') <= $jadwal->tgl_akhir))
                <a href="{!! url('pensi/pengkinian/form1/'.encrypt($idu)) !!}" class="btn btn-warning"> <i class="fa fa-user-circle-o"> </i> Pengkinian Data </a>
                @endif
            </div>
        </div>
    </div>
    <br/>
    <div class="card">
        <div class="card-body">
            {{--  @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif  --}}
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
                            <th>Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($biodata as $item)
                        @php $tgl = $item->updated_at->addDays(3); $tgl_selesai = date_format($tgl,'Y-m-d'); @endphp
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$item->nopeserta}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nohp}}</td>
                            <td>
                                {{ Carbon\Carbon::parse($item->updated_at)->isoFormat('D MMMM Y')}}
                            </td>
                            <td>
                                @if($tgl_selesai <= date('Y-m-d'))
                                     <a href="{!! url('pensi/pengkinian/cetakpengkiniandata/'.encrypt($item->nopeserta)) !!}" class="btn btn-sm btn-success"> Download </a>
                                @else
                                    {{ Carbon\Carbon::parse($tgl)->isoFormat('D MMMM Y')}}
                                @endif
                            </td>
                            <td>@if ($item->baru)
                                    @if ($item->verifikasi)
                                        <span class="label label-success">Selesai</span>
                                    @else
                                        <span class="label label-info">Diproses</span>
                                    @endif
                                @else
                                    <span class="label label-warning">Belum Di Kirim</span>
                                @endif
                            </td>
                            <td>
                                @if ($item->baru)
                                @else
                                    <a href="{!! url('pensi/pengkinian/formedit1/'.encrypt($item->id)) !!}" class="btn btn-sm btn-warning"> Edit </a>
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

    <script>
        $(".alert").fadeTo(3000, 1000).slideUp(1000, function(){
            $(".alert").slideUp(1000);
        });
    </script>
    {{--  <script>
    $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
    </script>  --}}
@endsection

