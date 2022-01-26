@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>{{$judul}}</h1>
      <ol class="breadcrumb">
        <li><a href="#">Layanan</a></li>
        <li><i class="fa fa-angle-right"></i>{{$judul}}</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <div class="row m-t-3">
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                    <h4>Data Permintaan </h4>
                    {{--  <p>made with bootstrap elements</p>  --}}
                    <form class="form ">
                        <div class="form-group">
                        <label>No Pensiun</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input class="form-control" value="{{ $mohon->nopeserta }}" type="text" disabled>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Nama</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input class="form-control" value="{{ $mohon->name }}" type="text" disabled>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Alamat</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input class="form-control" value="{{ $mohon->alamat }}" type="text" disabled>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>No HP</label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input class="form-control" value="{{ $mohon->nohp }}" type="text" disabled>
                        </div>
                        </div>
                        <div class="form-group">
                        <label>Di Ajukan Pada </label>
                        <div class="input-group">
                            <div class="input-group-addon"></div>
                            <input class="form-control" value="{{ $mohon->created_at }}" type="text" disabled>
                        </div>
                        </div>


                    </form>
                    </div>
                </div>
                </div>
                <div class="col-lg-6">
                        {!! Form::open(['url' => route('admin.skpermintaan.verifikasi'), 'method' => 'post', 'id' => 'permintaan_sk', 'files' => true]) !!}
                        <div class="card">
                            <div class="card-body">
                            <h4 class="text-black">Verifikasi</h4>
                            <label for="input-file-max-fs">Upload File Permintaan</label>
                            <input type="file" id="permintaan_sk" class="dropify" name="permintaan_sk"/>
                            <input class="form-control" value="{{ $mohon->id }}" name="id" type="hidden">
                            <input class="form-control" value="{{ $mohon->nopeserta }}" name="nopeserta" type="hidden">
                            <input class="form-control" value="{{ $judul }}" name="judul" type="hidden">
                            </div>
                            @if ($errors->has('permintaan_sk')) <span class="text-danger">{{ $errors->first('permintaan_sk') }}</span> @endif

                            <div class="form-group">
                                <center>
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
@section('injs')
<!-- dropify -->
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

