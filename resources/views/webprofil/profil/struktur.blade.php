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
              <h1 class="page-title">Struktur Organisasi</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Profil</a></li>
                <li class="active">Struktur Organisasi</li>
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
            <h2>Struktur Organisasi</h2>
            <p class="large">Dana Pensiun Semen Gresik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-12 col-md-12 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="{{ url('webprof/images/Organ1.jpg') }}" alt="#" /> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
@endsection
@section('injs')
@endsection
