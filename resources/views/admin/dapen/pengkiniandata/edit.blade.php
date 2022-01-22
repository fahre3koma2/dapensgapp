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
    <div class="row m-t-3">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-green">
              <h5 class="m-b-0">Biodata Lama</h5>
            </div>
            <div class="card-body">
              <form action="#" class="form-horizontal form-bordered">
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">No Peserta / Pensiun :</label>
                    <div class="col-md-9">
                       <input class="form-control" type="text" name="nopeserta" value="{{ $user1->nopeserta }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Nama :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="name" value="{{ $user1->name }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Tanggal Lahir  :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="tgl_lahir" value="{{ $user1->tgl_lahir }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Alamat :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="alamat" value="{{ $user1->alamat }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Kelurahan :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kelurahan" value="{{ $user1->kelurahan }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">RT :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="rt" value="{{ $user1->rt }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">RW :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="rw" value="{{ $user1->rw }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Kota :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kota" value="{{ $user1->kota }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Kode Pos :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kodepos" value="{{ $user1->kodepos }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">No Handphone :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="nohp" value="{{ $user1->nohp }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">NPWP :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="npwp" value="{{ $user1->npwp }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Jenis :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="jenis" value="{{ $user1->jenis }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Status Perkawinan :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kawin" value="{{ $user1->kawin }}" disabled>
                      </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-orange">
              <h5 class="m-b-0">Biodata Baru</h5>
            </div>
            <div class="card-body">
              <form action="#" class="form-horizontal form-bordered">
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">No Peserta / Pensiun :</label>
                    <div class="col-md-9">
                       <input class="form-control" type="text" name="nopeserta" value="{{ $user2->nopeserta }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->name != $user2->name) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Nama :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="name" value="{{ $user2->name }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->tgl_lahir != $user2->tgl_lahir) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Tanggal Lahir  :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="tgl_lahir" value="{{ $user2->tgl_lahir }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->alamat != $user2->alamat) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Alamat :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="alamat" value="{{ $user2->alamat }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->kelurahan != $user2->kelurahan) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Kelurahan :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kelurahan" value="{{ $user2->kelurahan }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->rt != $user2->rt) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">RT :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="rt" value="{{ $user2->rt }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->rw != $user2->rw) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">RW :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="rw" value="{{ $user2->rw }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->kota != $user2->kota) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Kota :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kota" value="{{ $user2->kota }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->kodepos != $user2->kodepos) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Kode Pos :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kodepos" value="{{ $user2->kodepos }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->nohp != $user2->nohp) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">No Handphone :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="nohp" value="{{ $user2->nohp }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->npwp != $user2->npwp) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">NPWP :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="npwp" value="{{ $user2->npwp }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->jenis != $user2->jenis) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Jenis :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="jenis" value="{{ $user2->jenis }}" disabled>
                      </div>
                  </div>
                  <div class="form-group row" @if($user1->kawin != $user2->kawin) style="background-color: yellow;" @endif>
                    <label class="control-label text-right col-md-3">Status Perkawinan :</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="kawin" value="{{ $user2->kawin }}" disabled>
                      </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="card m-t-3">
        <div class="card-body">
            <div class="click2edit m-b-3">Silahakan Klik Verifikasi untuk Pengkinian Data Pensiunan</div>

            <a href="{!! url('admin/layanan/pengkiniandata/') !!}" class="btn btn-secondary" onclick="edit()" type="button">Kembali</a>
            <a href="{{ route('admin.cetakpengkiniandata', ['id' => encrypt($user1->nopeserta)]) }}" class="btn btn-primary pull-right" style="margin-left: 10px;"> <i class="fa fa-print"></i> Print</a>
            <button type="button" class="btn btn-success pull-right finish" style="margin-right: 5px;" data-id="{{ $user2->id }}" data-id="{{ $user2->id }}" data-file="finish_{{ $user2->id }}"> <i class="fa fa-check-square-o"></i> Verifikasi </button>
                {{ Form::open(['url' => route('admin.pengkiniandata.update', [Crypt::encrypt($user2->id)]), 'method' => 'patch', 'id' => 'finish_'.$user2->id ]) }}
                {{ csrf_field() }}
                 <input type="hidden" name="user2" value="{{ $user2->nopd }}">
                 @if($new == 1)
                 <input type="hidden" name="user1" value="{{ $user1->nopd }}">
                 @else
                 <input type="hidden" name="user1" value="{{ $user1->id }}">
                 @endif
                 <input type="hidden" name="new" value="{{ $new }}">
                {{ Form::close() }}

        </div>
      </div>
</div>
@endsection
@section('injs')
    <script src="{{ url('dist/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
    function hapusFile(id) {
            Swal.fire({
                title: "Apa anda yakin?",
                text: "Data yang dihapus tidak akan bisa dikembalikan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Tidak, batal!",
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-default"
                }
            }).then(function(result) {
                if (result.value) {
                    $('#file-'+id).submit();
                }
            });
        }

        $("body").on("click", ".finish", function (e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: "Apakah Anda Yakin?",
                text: "Pengkinian Data Pensiunan!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes",
                cancelButtonText: "No"
            }).then((result) => {
                if (result.value) {
                    Swal.close();
                    $("#finish_"+id).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire('Dibatalkan', 'Data batal Di Input', 'error');
                }
            });
        });

    </script>
@endsection

