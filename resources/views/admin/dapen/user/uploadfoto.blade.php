@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Home</h1>
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><i class="fa fa-angle-right"></i> Upload Foto</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="row">
        <div class="col-lg-6 col-md-6">
        <form class="form ">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Upload Foto</h4>
              <label for="input-file-now-custom-3">Silahkan Edit Foto Profil Anda</label>
              <input type="file" id="input-file-now-custom-3" class="dropify" data-height="380" data-default-file="{{ url('dist/img/img14.jpg') }}" />
            </div>
          </div>
          <br>
          <a href="{!! url('pensi/profil') !!}" class="btn btn-inverse waves-effect waves-light pull-left">Kembali</a>
          <button type="submit" class="btn btn-success waves-effect waves-light m-r-10 pull-right">Submit</button>
        </form>
        </div>
      </div>
      </div>
@endsection
@section('injs')
    <!-- Chart Peity JavaScript -->
    <script src="{{ url('dist/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ url('dist/plugins/functions/jquery.peity.init.js') }}"></script>

    <!-- Chartist JavaScript -->
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

