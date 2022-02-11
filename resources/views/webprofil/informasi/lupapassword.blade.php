@extends('webprofil.main')

@section('content')
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Panduan Lupa Password</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Informasi</a></li>
                <li class="active">Panduan Lupa Password</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2>Panduan Lupa Password</h2>
            <p class="large">Dana Pensiun Semen Gresik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-12 col-md-12 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <p><embed src="{{ url('webprof/filedapen/PANDUAN_LUPA_PASSWORD.pdf') }}" type="application/pdf" width="800" height="800" data-mce-fragment="1"></embed></p> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
@endsection
@section('injs')
@endsection
