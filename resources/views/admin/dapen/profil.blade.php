@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Home</h1>
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> Home</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="row">
        <div class="col-lg-4">
          <div class="user-profile-box m-b-3">
            <div class="box-profile text-white"> <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dist/img/img1.jpg') }}" alt="User profile picture">
              <h3 class="profile-username text-center">{{ $user->biodata->name }}</h3>
              <p class="text-center">{{ $user->biodata->nopeserta }}</p>
              <p class="text-center"> <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-file-photo-o"></i> Upload Foto</button> </p>
            </div>
          </div>
          <div class="card m-b-3">
            <div class="card-body">
            <h4 class="text-black">Biodata Berhak</h4></br>
              <div class="box-body"> <strong><i class="fa fa-book margin-r-5"></i> Nama</strong>
                <p class="text-muted">{{ $user->biodata->berhak }} </p>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                <p class="text-muted">Malibu, California</p>
                <hr>
                <strong><i class="fa fa-envelope margin-r-5"></i> NIK </strong>
                <p class="text-muted">alexanderpierce@gmail.com</p>
                <hr>
                <strong><i class="fa fa-phone margin-r-5"></i> No Ponsel</strong>
                <p>(123) 456-7890 </p>
                <hr>
                <button type="button" class="btn btn-sm btn-warning pull-right"><i class="fa fa-edit"></i> Edit</button>
            </div>
              <!-- /.box-body -->
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">
                @if ($edit)
                     <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Edit Biodata Peserta</a> </li>
                @else
                     <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Biodata Peserta</a> </li>
                @endif
                {{--  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Pengguna</a> </li>  --}}
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="settings" role="tabpanel">
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
          </div>
        </div>
      </div>
      <!-- Main row -->
    </div>
@endsection
@section('injs')

@endsection

