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
                <form action="{{ $edit ? route('pensi.pensiun.update', ['pensiun' => encrypt($user->id)]) : route('pensi.pensiun.store') }}" method="POST" class="form-horizontal form-material">
                    @if ($edit)
                        {{ method_field('PUT') }}
                    @endif
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">No Pensiun Dapen SG</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->nopeserta }}" disabled>
                            <span class="fa fa-user-circle-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Nama Lengkap</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->name }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group has-feedback">
                            <label class="control-label">Alamat</label>
                            <textarea class="form-control" id="placeTextarea" rows="2" {{ $edit ? '' : 'disabled' }}>{{ $user->biodata->alamat }}</textarea>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Kota</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->kota }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa-address-book-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Kode Pos</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->kodepos }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Jenis Pensiun</label>
                                <select class="form-control" name="unit" {{ $edit ? '' : 'disabled' }}>
                                @foreach ($jenis as $item)
                                    <option value="{{$item}}" {!! $item->jenis == $user->biodata->jenis ? 'selected' : '' !!}>{{$item->nama}}</option>
                                @endforeach
                                </select>
                            <span class="fa fa-users form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Jenis Kelamin</label>
                            <select class="form-control" name="unit" {{ $edit ? '' : 'disabled' }}>
                                <option value="L" {{ $user->biodata->sex == 'L' ? 'selected' : '' }}> Laki-Laki </option>
                                <option value="L" {{ $user->biodata->sex == 'P' ? 'selected' : '' }}> Perempuan </option>
                            </select>
                            <span class="fa fa-id-badge form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Tempat Lahir</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->tempat_lahir }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa-tablet form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">Tanggal Lahir</label>
                            <input class="form-control" type="date" value="{{ $user->biodata->tgl_lahir }}" {{ $edit ? '' : 'disabled' }}>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">NIK</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->nik }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa fa-address-card-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">NPWP</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->npwp }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa-credit-card form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">No Ponsel</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->nohp }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa-phone-square form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group has-feedback">
                            <label class="control-label">E-mail</label>
                            <input class="form-control" type="text" value="{{ $user->biodata->email }}" {{ $edit ? '' : 'disabled' }}>
                            <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                        </div>
                        <div class="col-md-12">
                            @if ($edit)
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                <a href="{{ route('pensi.pensiun.show', ['pensiun' => $user->id]) }}" class="btn btn-secondary waves-effect m-l-5">Cancel</a>
                            @else
                                <a href="{{ route('pensi.pensiun.edit', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit Biodata</a>
                            @endif
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

