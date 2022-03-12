@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>{{ $judul }}</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> {{ $judul }}</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">Edit {{ $judul }}</h5>
            </div>
            <div class="card-body">
                  <form class="form-horizontal" action="{{ $edit ? route('admin.visimisiupdate', ['id' => encrypt($konten->id)]) : route('admin.visimisiupdate') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
                    @if ($edit)
                        {{ method_field('PUT') }}
                    @endif
                    @csrf
                <div class="form-body">

                  <div class="form-group row">
                    <label class="control-label text-right col-md-1">Keterangan</label>
                    <div class="col-md-10">
                        <input class="form-control" type="hidden" name="judul" value="{{ $judul }}">
                      <textarea class="summernote" name="keterangan" required>{!! $edit ? $konten->keterangan : '' !!}</textarea>
                    </div>
                  </div>

                </div>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="offset-sm-3 col-md-9">
                          <button type="submit" class="btn btn-success"> Submit</button>
                          <button type="button" class="btn btn-inverse">Cancel</button>
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
