@extends('webprofil.main')

@section('content')
<!-- inner page banner -->
{{--  <div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Pengajuan Pensiun</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Layanan</a></li>
                <li class="active">Pengajuan Pensiun</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  --}}
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 service_list">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- full price table -->
        <div class="price_table row" style="margin-top: 0;">
          <!-- price table one -->
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

          </div>
          <!-- end price table one -->
          <!-- price table two -->
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 price_table_active">
            <div class="row">
              <div class="price_table_inner margin_bottom_30">
                <div class="price_head text_align_center white_fonts">
                  <h5>Pelaporan Berhasil</h5>
                  <p>Laporan Berita Duka Dapen Semen Gresik</p>
                </div>
                <div class="price_contant">
                  <div class="center">
                    <p class="price_amount">No Pelaporan<br/> <span class="price_no">{{$berita->nolaporan}}</span></p>
                  </div>
                  <div class="price_cont text_align_center">
                    <h2><p>Kontak Dapen SG</p></h2>
                    <p>No Telepon : </p>
                    <p>WA :</p>
                    <p>Email : </p>
                  </div>
                </div>
                <div class="price_bottom">
                  <div class="center"> <a href="{!! url('/') !!}" class="btn main_bt">Kembali ke Home</a> </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end price table two -->
          <!-- price table three -->
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">

          </div>
          <!-- end price table three -->
        </div>
        <!-- end full price table -->
      </div>
    </div>
  </div>
</div>
<!-- end section -->
@endsection
@section('injs')
    <script src="{{ url('webprof/js/hizoom.js')}}"></script>
    <script>
            $('.hi1').hiZoom({
                width: 300,
                position: 'right'
            });
            $('.hi2').hiZoom({
                width: 400,
                position: 'right'
            });
    </script>
    <script>
        function disableSubmit() {
        document.getElementById("submit").disabled = true;
        }

        function activateButton(element) {

            if(element.checked) {
                document.getElementById("submit").disabled = false;
            }
            else  {
                document.getElementById("submit").disabled = true;
            }

        }
    </script>
@endsection

@section('cs')
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
        var jqOld = jQuery.noConflict();
        jqOld(function() {
            jqOld("#datepicker" ).datepicker();
        })
    </script>

    <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection
