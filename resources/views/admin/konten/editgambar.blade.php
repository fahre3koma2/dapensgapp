@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Konten Gambar</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> Konten Gambar</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <form action="{{ route('admin.updategambar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="text-black">Edit Konten Gambar</h4>
                    <label for="input-file-now">{{ $konten->konten }}</label>
                    <input type="hidden" name="idx" value="{{ $konten->id }}">
                    <input type="hidden" name="status" value="{{ $konten->status }}">
                    <input type="file" name="file" id="customFile" class="dropify" data-default-file="{{ url('webprof/images/dapen/'.$konten->file) }}">
                <br/>
                <center>
                    <a href="" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-success">Update Gambar</button>
                </center>
                </div>
            </div>
        </form>
        </div>
    </div>
    <br/><br/><br/><br/><br/>
</div>
@endsection
@section('injs')
<!-- DataTable -->
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

