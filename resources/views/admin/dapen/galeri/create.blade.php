@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Konten Galeri</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> Konten Galeri</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">Tambah Galeri</h5>
            </div>
            <div class="card-body">
                  <form class="form-horizontal" action="{{ $edit ? route('admin.galeri.update', ['artikel' => encrypt($konten->id)]) : route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    @if ($edit)
                        {{ method_field('PUT') }}
                    @endif
                    @csrf
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label text-right col-md-1">Judul</label>
                    <div class="col-md-10">
                    <input placeholder="Judul" class="form-control" type="text" name="judul" value="{{ $edit ? $konten->judul : '' }}" required>
                      </div>
                  </div>

                  <div class="form-group row">
                   <label class="control-label text-right col-md-1">Foto</label>
                   <div class="col-md-4">
                    <input class="form-control" type="file" name="foto">
                     @if ($errors->has('foto')) <span class="text-danger">{{ $errors->first('foto') }}</span> @endif
                   </div>
                  </div>

                </div>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="offset-sm-3 col-md-9">
                          <button type="submit" class="btn btn-success"> Submit</button>
                          <a href="{{ route('admin.galeri.index') }}" class="btn btn-info">Cancel</a>
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
    <!-- summernote -->
    {{--  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>  --}}
    <script src="{{ url('dist/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
     jQuery(document).ready(function(){
        $('.summernote').summernote({
            height: 300,                 // set editor height
            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor
            focus: true                 // set focus to editable area after initializing summernote
        });
    });
    </script>
@endsection
