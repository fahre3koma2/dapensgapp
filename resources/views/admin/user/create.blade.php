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
  <div class="card">
      <div class="card-body">
        <h4 class="text-black">Basic Elements</h4>
            <div class="row">
                <div class="col-lg-4">
                    <fieldset class="form-group">
                        <label>No Pegawai</label>
                        <input type="text" class="form-control" id="no_pegawai" name="no_pegawai" value="{{ $edit ? $user->biodata->no_pegawai : old('no_pegawai') }}">
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label>Nama Pegawai</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{ $edit ? $user->name : old('name') }}">
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $edit ? $user->email : old('email') }}" required>
                        @if($errors->has('email'))
                            <label id="login-error" class="text-danger">{{ $errors->first('email') }}</label>
                        @endif
                    </fieldset>
                </div>
                <div class="col-lg-4">
                    <fieldset class="form-group">
                        <label>No HP</label>
                        <input type="number" class="form-control" id="nohp" name="nohp" value="{{ $edit ? $user->biodata->nohp : old('nohp') }}">
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $edit ? $user->biodata->jabatan : old('jabatan') }}">
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label>Unit</label>
                        <select class="form-control" name="unit" required>
                        @foreach ($unit as $id => $nama)
                            <option value="{{$id}}">{{$nama}}</option>
                        @endforeach
                        </select>
                    </fieldset>
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
                    url:"{{ route('remove-role') }}",
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
                    url:"{{ route('add-role') }}",
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

