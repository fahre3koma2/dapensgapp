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
              <h1 class="page-title">Lapor Berita Duka</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Layanan</a></li>
                <li class="active">Lapor Berita Duka</li>
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
          <form action="{{ route('beritadukakirim') }}" method="POST" >
            @csrf
            <fieldset>
            <div class="row">
              <div class="col-md-6">
                <div class="form-field">
                  <label>Nama Pelapor <span class="red">*</span></label>
                  <input name="nama_pelapor" type="text" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Nama Pensiunan (yang meninggal dunia) <span class="red">*</span></label>
                  <input name="nama_peserta" type="text" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Nomor Pensiun<span class="red">*</span></label>
                  <input name="nopensiun" type="text" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Nomor HP Pelapor <span class="red">*</span></label>
                  <input name="notelp" type="number" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-field">
                  <label>Tanggal Meninggal <span class="red">*</span></label>
                  <input name="tgl_meninggal" type="text" id="datepicker" required>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-field">
                  <label>Hubungan Keluarga<span class="red">*</span></label>
                  <input name="hub_keluarga" type="text" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Alamat <span class="red">*</span></label>
                  <textarea name="alamat" required></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-field">
                  <label>Keterangan <span class="red">*</span></label>
                  <textarea name="keterangan" required></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-field">
                    <input name="ck" type="checkbox" name="terms" id="terms" onchange="activateButton(this)">
                    <span class="crte-ac">Dengan ini saya menyatakan pelaporan ini dibuat dengan sebenar-benarnya dengan nomor telpon yang saya cantumkan saya bersedia untuk di hubungi oleh pihak Dana Pensiun Semen Gresik untuk di konfirmasi. *</span> </div>
                </div>
              <div class="col-md-12 payment-bt">
                <div class="center">
                <button class="bt_main" type="submit" name="submit" id="submit" disabled>Kirim</button>
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
