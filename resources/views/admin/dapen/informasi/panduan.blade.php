@extends('admin.layouts.master')

@section('breadcrumb')
    <div class="content-header sty-one">
      <h1>Panduan</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Panduan</li>
      </ol>
    </div>
@endsection

@section('content')
    <div class="content">
      <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <p><embed src="{{ url('webprof/filedapen/panduan_pengkinian.pdf') }}" type="application/pdf" width="800" height="800" data-mce-fragment="1"></embed></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('injs')

@endsection

