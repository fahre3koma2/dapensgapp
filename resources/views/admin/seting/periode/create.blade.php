@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Periode Pengkinian Data</h1>
      <ol class="breadcrumb">
        <li><a href="#">Seting</a></li>
        <li><i class="fa fa-angle-right"></i>Periode Pengkinian Data</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">Periode Pengkinian Data</h5>
            </div>
            <div class="card-body">
              <form action="{{ $edit ? route('admin.seting-periode.update', ['id' => encrypt($mohon->id)]) : route('admin.seting-periode.post') }}" method="POST" class="form-horizontal form-bordered">
                    @if ($edit)
                        {{ method_field('PUT') }}
                    @endif
                    @csrf
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Periode 1:</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="periode1" value="{{ $edit ? $mohon->periode1 : '' }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Tanggal Awal Periode 1:</label>
                    <div class="col-md-4">
                        <input class="form-control" type="date" name="tgl_awal1" value="{{ $edit ? $mohon->tgl_awal1 : '' }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Tanggal Akhir Periode 2:</label>
                    <div class="col-md-4">
                        <input class="form-control" type="date" name="tgl_akhir1" value="{{ $edit ? $mohon->tgl_akhir1 : '' }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Periode 2:</label>
                    <div class="col-md-6">
                        <input class="form-control" type="text" name="periode2" value="{{ $edit ? $mohon->periode2 : '' }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Tanggal Awal Periode 2:</label>
                    <div class="col-md-4">
                        <input class="form-control" type="date" name="tgl_awal2" value="{{ $edit ? $mohon->tgl_awal2 : '' }}">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Tanggal Akhir Periode 2:</label>
                    <div class="col-md-4">
                        <input class="form-control" type="date" name="tgl_akhir2" value="{{ $edit ? $mohon->tgl_akhir1 : '' }}">
                    </div>
                  </div>


                </div>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="offset-sm-3 col-md-9">
                          <button type="submit" class="btn btn-success">Simpan</button>
                          <a href="" class="btn btn-primary">Kembali</a>
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
      <br/>
      <br/>
</div>
@endsection
@section('injs')

@endsection

