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
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1 checkout_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="payment-form">
          <form action="#">
            <fieldset>
            <div class="row">
              <div class="col-md-6">
                <div class="form-field">
                  <label>Nama Pelapor <span class="red">*</span></label>
                  <input name="fn" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>No Telpon <span class="red">*</span></label>
                  <input name="ln" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Nama Peserta <span class="red">*</span></label>
                  <input name="fn" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Tanggal Meninggal <span class="red">*</span></label>
                  <input name="ln" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Nomor Dana<span class="red">*</span></label>
                  <input name="cm" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Unit Bayar<span class="red">*</span></label>
                  <input name="cm" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Alamat <span class="red">*</span></label>
                  <textarea name="ad"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Keterangan <span class="red">*</span></label>
                  <textarea name="ad"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                    <span class="crte-ac">Dengan ini saya menyatakan pelaporan ini dibuat dengan sebenar-benarnya dengan nomor telpon yang saya cantumkan saya bersedia untuk di hubungi oleh pihak Dana Pensiun Semen Gresik untuk di konfirmasi. *</span> </div>
                    <input name="ck" type="checkbox">
                </div>
              <div class="col-md-12 payment-bt">
                <div class="center">
                <button class="bt_main">Start Subscription</button>
              </div>
            </div>
            </div>
            </fieldset>
          </form>
        </div>
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
@endsection
