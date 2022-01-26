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
                {{--  <a href="{!! url('pensi/layanan/sketerangan/tambah', ['id' => encrypt($idpensi)]) !!}" class="btn btn-sm btn-warning">Tambah File</a>  --}}
            </div>
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
                    <thead>
                        <tr>
                            <th width="2%">No</th>
                            <th>No Permintaan</th>
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
                            <td> @if($judul == 'SK Penetapan')
                                    {{$item->noskpenetapan}}
                                 @else
                                    {{$item->nosketerangan}}
                                 @endif

                            </td>
                            <td>{{$item->nopeserta}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->nohp}}</td>
                            <td>
                                @if ($item->status == '1')
                                    <span class="label label-info">Selesai</span>
                                @else
                                    <span class="label label-success">Baru</span>
                                @endif

                            </td>
                            <td>
                                @if ($item->status)

                                    @else
                                        @if($judul == 'SK Penetapan')
                                            <a href="{!! route('admin.skpenetapanshow', ['id' => encrypt($item->id)]) !!}" class="btn btn-sm btn-success">Verifikasi</a>
                                        @else
                                            <a href="{!! route('admin.sketeranganshow', ['id' => encrypt($item->id)]) !!}" class="btn btn-sm btn-success">Verifikasi</a>
                                        @endif
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

