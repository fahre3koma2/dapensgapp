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
    <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">Permintaan Surat Keterangan</h5>
            </div>
            <div class="card-body">
              <form action="{{ route('pensi.sketerangan.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    @if ($edit)
                        {{ method_field('PUT') }}
                    @endif
                    @csrf
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">No Peserta / Pensiun:</label>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="nopeserta" value="{{ $user->biodata->nopeserta }}" disabled>
                        <input class="form-control" type="hidden" name="nopeserta" value="{{ $user->biodata->nopeserta }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Nama</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="name" value="{{ $user->biodata->name }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Alamat</label>
                    <div class="col-md-9">
                      <textarea rows="2" class="form-control" name="alamat" required>{{ $user->biodata->alamat }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">No HP</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text" name="nohp" value="{{ $user->biodata->nohp }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Keperluan</label>
                    <div class="col-md-9">
                        <select class="form-control" name="jenis">
                            <option value="0"> Sebagai Pensiunan </option>
                            <option value="1"> Untuk Anak Masuk Perguruan Tinggi </option>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="offset-sm-3 col-md-9">
                          <button type="submit" class="btn btn-success">Kirim</button>
                          <button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
@section('injs')

@endsection

