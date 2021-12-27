@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Konten Artikel</h1>
      <ol class="breadcrumb">
        <li><a href="#">Konten</a></li>
        <li><i class="fa fa-angle-right"></i> Konten Artikel</li>
      </ol>
    </div>
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">Tambah Artikel</h5>
            </div>
            <div class="card-body">
              <form action="#" class="form-horizontal form-bordered">
                <div class="form-body">
                  <div class="form-group row">
                    <label class="control-label text-right col-md-1">Judul</label>
                    <div class="col-md-10">
                      <input placeholder="Judul" class="form-control" type="text">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-1">Keterangan</label>
                    <div class="col-md-10">
                      <textarea class="summernote" name="keterangan" required></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-1">Kategori</label>
                    <div class="col-md-6">
                      <select class="form-control custom-select">
                        <option value="">Male</option>
                        <option value="">Female</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                   <label class="control-label text-right col-md-1">Foto</label>
                   <div class="col-md-4">
                    <input class="form-control" type="file">
                   </div>
                  </div>

                  <div class="form-group row last">
                    <label class="control-label text-right col-md-1">Country</label>
                    <div class="col-md-10">
                      <select class="form-control">
                      </select>
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
    {{--  <script src="{{ url('dist/plugins/summernote/summernote-bs4.js') }}"></script>  --}}
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
