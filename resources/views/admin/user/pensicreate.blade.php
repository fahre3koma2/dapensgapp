@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Home</h1>
      <ol class="breadcrumb">
        <li><a href="#">User</a></li>
        <li><i class="fa fa-angle-right"></i> Profil User</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
        <div class="row m-t-3">
            <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-blue">
            @if ($edit)
                <h5 class="text-white m-b-0">Edit Profil Pensiunan</h5>
            @else
                <h5 class="text-white m-b-0">Profil Pensiunan</h5>
            @endif
                </div>
                <div class="card-body">
                <form action="{{ $edit ? route('admin.user.update', ['pensiun' => encrypt($user->id)]) : route('admin.user.store') }}" method="POST" class="form-horizontal form-material">
                    @if ($edit)
                        {{ method_field('PUT') }}
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">No Pensiun Dapen SG</label>
                            <input class="form-control" type="text" name="nopeserta">
                            <input class="form-control" type="hidden" name="status" value="Pensiunan">
                            <span class="fa fa-user-circle-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Nama Lengkap</label>
                            <input class="form-control" type="text" name="name">
                            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group has-feedback">
                            <label class="control-label">Alamat</label>
                            <textarea class="form-control" id="placeTextarea" rows="2" name="alamat"></textarea>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Kota</label>
                            <input class="form-control" type="text" name="kota">
                            <span class="fa fa-address-book-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Kode Pos</label>
                            <input class="form-control" type="text" name="kodepos">
                            <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Jenis Pensiun</label>
                                <select class="form-control" name="jenis">
                                    <option value=""> -Pilih- </option>
                                @foreach ($jenis as $item)
                                    <option value="{{$item->jenis}}">{{$item->nama}}</option>
                                @endforeach
                                </select>
                            <span class="fa fa-users form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Jenis Kelamin</label>
                            <select class="form-control" name="sex">
                                <option value=""> -Pilih- </option>
                                <option value="L"> Laki-Laki </option>
                                <option value="P"> Perempuan </option>
                            </select>
                            <span class="fa fa-id-badge form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir">
                            <span class="fa fa-tablet form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tgl_lahir">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">NIK</label>
                            <input class="form-control" type="text" name="nik">
                            <span class="fa fa fa-address-card-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">NPWP</label>
                            <input class="form-control" type="text" name="npwp">
                            <span class="fa fa-credit-card form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">No Ponsel</label>
                            <input class="form-control" type="text" name="nohp">
                            <span class="fa fa-phone-square form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">E-mail</label>
                            <input class="form-control" type="text" name="email_user">
                            <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                            <a href="{{ route('admin.pensi') }}" class="btn btn-secondary waves-effect m-l-5">Cancel</a>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
      <!-- Main row -->
    </div>
@endsection
@section('injs')

@endsection

