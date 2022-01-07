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
            @if ($edit)
            <div class="card">
                <form action="{{ route('pensi.updatefoto') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                @csrf
                    <div class="card-body">
                        <h4 class="card-title">Edit Foto Profil</h4>
                        <input class="form-control" type="hidden" name="idx" value="{{ $user->biodata->id }}">
                        <input class="form-control" type="hidden" name="userid" value="{{ $user->id }}">
                        <input class="form-control" type="hidden" name="nopeserta" value="{{ $user->biodata->nopeserta }}">
                        @if($user->biodata->file)
                            <input type="file" name="foto" id="input-file-now-custom-1" class="dropify" data-default-file="{{ url('dapen/foto/'.$user->biodata->file) }}" />
                        @else
                            <input type="file" name="foto" id="input-file-now-custom-1" class="dropify" data-default-file="{{ url('dist/img/img1.jpg') }}" />
                        @endif
                        <p class="card-text"><label for="input-file-now-custom-1">Silihakn klik untuk edit Foto</label></p>
                        @if ($errors->has('foto')) <span class="text-danger">{{ $errors->first('foto') }}</span> @endif
                        @if ($edit)
                            <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Submit</button>
                        @else
                            <a href="{{ route('pensi.pensiun.edit', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit Biodata</a>
                        @endif
                    </div>
                </form>
            </div>
            <br/>
            @else
            <div class="user-profile-box m-b-2">
                <div class="box-profile text-white">
                    @if($user->biodata->file)
                        <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dapen/foto/'.$user->biodata->file) }}" alt="User profile picture">
                    @else
                        <img class="profile-user-img img-responsive img-circle m-b-2" src="{{ url('dist/img/img1.jpg') }}" alt="User profile picture">
                    @endif
                <h3 class="profile-username text-center">{{ $user->biodata->name }}</h3>
                <p class="text-center">{{ $user->biodata->nopeserta }}</p>
                <p class="text-center"> <a href="" class="btn btn-sm btn-primary"><i class="fa fa-file-photo-o"></i> Upload Foto</a> </p>
                </div>
            </div>
            @endif
          <div class="card m-b-3">
            <div class="card-body">
            <h4 class="text-black">Biodata Berhak</h4></br>
              <div class="box-body"> <strong><i class="fa fa-book margin-r-5"></i> Nama</strong>
                <input class="form-control" type="text" name="name" value="{{ $user->biodata->berhak }}" {{ $edit ? '' : 'disabled' }}>
                <hr>
                <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>
                <input class="form-control" type="text" name="name" value="{{ $user->biodata->berhakalamat }}" {{ $edit ? '' : 'disabled' }}>
                <hr>
                <strong><i class="fa fa-envelope margin-r-5"></i> NIK </strong>
                <input class="form-control" type="text" name="name" value="{{ $user->biodata->berhaknik }}" {{ $edit ? '' : 'disabled' }}>
                <hr>
                <strong><i class="fa fa-phone margin-r-5"></i> No Ponsel</strong>
                <input class="form-control" type="text" name="name" value="{{ $user->biodata->berhaknoponsel }}" {{ $edit ? '' : 'disabled' }}>
                <hr>
                @if ($edit)
                    <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Submit</button>
                @else
                    <button type="button" class="btn btn-sm btn-warning pull-right"><i class="fa fa-edit"></i> Edit</button>
                @endif
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
                                <input class="form-control" type="text" name="name" value="{{ $user->biodata->name }}" {{ $edit ? '' : 'disabled' }}>
                                <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Alamat</label>
                                <textarea class="form-control" id="placeTextarea" name="alamat" rows="2" {{ $edit ? '' : 'disabled' }}>{{ $user->biodata->alamat }}</textarea>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Kota</label>
                                <input class="form-control" type="text" name="kota" value="{{ $user->biodata->kota }}" {{ $edit ? '' : 'disabled' }}>
                                <span class="fa fa-address-book-o form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Kode Pos</label>
                                <input class="form-control" type="text" name="kodepos" value="{{ $user->biodata->kodepos }}" {{ $edit ? '' : 'disabled' }}>
                                <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Jenis Pensiun</label>
                                    <select class="form-control" name="jenis" {{ $edit ? '' : 'disabled' }}>
                                    @foreach ($jenis as $item)
                                        <option value="{{$item->jenis}}" {!! $item->jenis == $user->biodata->jenis ? 'selected' : '' !!}>{{$item->nama}}</option>
                                    @endforeach
                                    </select>
                                <span class="fa fa-users form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Jenis Kelamin</label>
                                <select class="form-control" name="sex" {{ $edit ? '' : 'disabled' }}>
                                    <option value="L" {{ $user->biodata->sex == 'L' ? 'selected' : '' }}> Laki-Laki </option>
                                    <option value="P" {{ $user->biodata->sex == 'P' ? 'selected' : '' }}> Perempuan </option>
                                </select>
                                <span class="fa fa-id-badge form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" value="{{ $user->biodata->tempat_lahir }}" {{ $edit ? '' : 'disabled' }}>
                                <span class="fa fa-tablet form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgl_lahir" value="{{ $user->biodata->tgl_lahir }}" {{ $edit ? '' : 'disabled' }}>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">NIK</label>
                                <input class="form-control" type="text" name="nik" value="{{ $user->biodata->nik }}" {{ $edit ? '' : 'disabled' }}>
                                <span class="fa fa fa-address-card-o form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">NPWP</label>
                                <input class="form-control" type="text" name="npwp" value="{{ $user->biodata->npwp }}" {{ $edit ? '' : 'disabled' }}>
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
                                <input class="form-control" type="email" name="email_user" value="{{ $user->biodata->email_user }}" {{ $edit ? '' : 'disabled' }}>
                                <span class="fa fa-envelope-o form-control-feedback" aria-hidden="true"></span> </div>
                            </div>
                            <div class="col-md-12">
                                @if ($edit)
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    <a href="{{ route('pensi.pensiun.show', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-secondary waves-effect m-l-5">Cancel</a>
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
    <script src="{{ url('dist/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script src="{{ url('dist/plugins/dropify/dropify.min.js') }}"></script>
    <script>
            $(document).ready(function(){
                // Basic
                $('.dropify').dropify();

                // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });

                var drDestroy = $('#input-file-to-destroy').dropify();
                drDestroy = drDestroy.data('dropify')
                $('#toggleDropify').on('click', function(e){
                    e.preventDefault();
                    if (drDestroy.isDropified()) {
                        drDestroy.destroy();
                    } else {
                        drDestroy.init();
                    }
                })
            });
        </script>
@endsection

