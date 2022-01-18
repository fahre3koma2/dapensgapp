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
                        {{--  @if ($edit)
                            <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Submit</button>
                        @else
                            <a href="{{ route('pensi.pensiun.edit', ['pensiun' => encrypt($user->id)]) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit Biodata</a>
                        @endif  --}}
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
                <input class="form-control" type="text" name="name" value="{{ $user->biodata->alamat }}" {{ $edit ? '' : 'disabled' }}>
                <hr>
                <strong><i class="fa fa-envelope margin-r-5"></i> NIK </strong>
                <input class="form-control" type="text" name="name" value="{{ $user->biodata->nik }}" {{ $edit ? '' : 'disabled' }}>
                <hr>
                <strong><i class="fa fa-phone margin-r-5"></i> No Ponsel</strong>
                <input class="form-control" type="text" name="name" value="{{ $user->biodata->nohp }}" {{ $edit ? '' : 'disabled' }}>
                <hr>
                {{--  @if ($edit)
                    <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Submit</button>
                @else
                    <button type="button" class="btn btn-sm btn-warning pull-right"><i class="fa fa-edit"></i> Edit</button>
                @endif  --}}
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
                     <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab" aria-expanded="true">Biodata Peserta</a> </li>
                @endif
                {{--  <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#settings" role="tab">Pengguna</a> </li>  --}}
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#keluarga" role="tab" aria-expanded="false">Keluarga</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#rekening" role="tab">Rekening</a> </li>

              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="settings" role="tabpanel" aria-expanded="true">
                  @include('admin.dapen.user.identitas')
                </div>

                <div class="tab-pane" id="keluarga" role="tabpanel" aria-expanded="false">
                  @include('admin.dapen.user.keluarga')
                </div>

                <div class="tab-pane" id="rekening" role="tabpanel">
                  @include('admin.dapen.user.rekening')
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

