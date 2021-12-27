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
              <h1 class="page-title">Visi Misi</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Profil</a></li>
                <li class="active">Visi Misi</li>
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
            <h2>Visi Misi Perusahaan</h2>
            <p class="large">Profil Dana Pensiun Semen Gresik</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row about_blog">
      <div class="col-lg-6 col-md-6 col-sm-12 about_cont_blog">
        <div class="full text_align_left">
            <h3>Visi</h3>
                <p>Menjadi  Dana Pensiun yang mampu memberikan Manfaat Pensiun yang layak secara mandiri hingga Peserta terakhir.</p>
                <br>
            <h3>Misi</h3>
                <ul>
                    <li><i class="fa fa-circle"></i>Memberikan kesinambungan penghasilan bagi peserta dan keluarganya agar karyawan mendapat kepastian jaminan penghasilan di masa pensiun.</li>
                    <li><i class="fa fa-circle"></i>Memberikan rasa aman dan tenang pada karyawan sehingga dapat meningkatkan kinerja dan motivasi.</li>
                    <li><i class="fa fa-circle"></i>Mengelola kekayaan dana pensiun sesuai Arahan Investasi dan peraturan perundangan dan memberikan hasil investasi yang maksimal.</li>
                </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 about_feature_img padding_right_0">
        <div class="full text_align_center"> <img class="img-responsive" src="{{ url('webprof/images/it_service/post-06.jpg') }}" alt="#" /> </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('injs')
@endsection


