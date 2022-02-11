@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Panduan Pengkinian Data</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Panduan Pengkinian Data</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <center>
                        <p><embed src="{{ url('webprof/filedapen/panduan_pengkinian.pdf') }}" type="application/pdf" width="800" height="800" data-mce-fragment="1"></embed></p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('injs')

@endsection

