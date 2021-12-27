@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Modern Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Modern Dashboard</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
  <div class="card m-t-3">
    <div class="card-body">
      <h4 class="text-black">Data Table</h4>
      <p>Data Table With Full Features</p>
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
           <thead>
                <tr>
                    <th width="2%">No</th>
                    <th width="20%">No Peserta</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; $ur = 1; $jenis = [ 'A' => 'Anak', 'C' => 'Cacat', 'D' => 'Dipercepat' , 'J' => 'Janda', 'N' => 'Normal', 'T' => 'Tunda Bayar', 'U' => 'Duda']; @endphp
                @foreach ($users as $value)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $value->nopeserta }} </td>
                    <td>{{ $value->name }} </td>
                    <td>{{ $value->biodata->email }} </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('admin.user.show', ['user' => encrypt($value->id)]) }}"><i class="fa fa-list"></i> Detail</a> |
                        {{--  <a class="btn btn-sm btn-warning" href="{{ route('user.edit', ['user' => encrypt($value->id)]) }}"><i class="fa fa-edit"></i> Edit</a> |  --}}
                        <button type="button" class="btn btn-sm btn-danger delete" data-id="{{ $value->id }}" data-file="{{$value->id}}"><i class="fa fa-trash"></i> Hapus</button>
                        {{ Form::open(['url'=>route('admin.user.destroy', [Crypt::encrypt($value->id)]), 'method'=>'delete', 'id' => $value->id, 'style' => 'display: none;']) }}
                        {{ csrf_field() }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
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
        'searching'   : false,
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
    $("table").tableExport({formats: ["xlsx","xls", "csv", "txt"],    });
    </script>

    <script>
        $("body").on("click", ".delete", function (e) {
                e.preventDefault();
                var id = $(this).data('id');

                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    text: "Anda akan menghapus data ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "No"
                }).then((result) => {
                    if (result.value) {
                        Swal.close();
                        $("#"+id).submit();
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire('Dibatalkan', 'Data batal dihapus', 'error');
                    }
                });
            });
            function removeRole(user_id, role_id, element){
                var token = "{{ csrf_token() }}";
                var request = $.ajax({
                    url:"{{ route('admin.remove-role') }}",
                    type:"POST",
                    dataType:"html",
                    data:{
                        user_id:user_id,
                        role_id:role_id,
                        _token:token
                    },
                    success: function(result){
                        $(element).parent().parent().remove();
                    }
                })
            }
            function addRole(user_token, user_id){
                var token = "{{ csrf_token() }}";
                var role_id = $('#select_'+user_token).val();
                var request = $.ajax({
                    url:"{{ route('admin.add-role') }}",
                    type:"POST",
                    dataType:"html",
                    data:{
                        user_id:user_id,
                        role_id:role_id,
                        _token:token
                    },
                    success: function(result){
                        $('#'+user_token).append(result);
                    }
                })
            }
    </script>
@endsection

