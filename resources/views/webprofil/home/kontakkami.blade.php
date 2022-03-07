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
              <h1 class="page-title">Kontak Kami</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Kontak Kami</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>KONTAK KAMI</h2>
              </div>
            </div>
            <div class="contact_information">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-road" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>Jalan RA. Kartini No. 23</h4>
                    <p>Gresik, Jawa Timur</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-user" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                      <h5>Customer Service</h5>
                    <h4>+6231 3984492</h4>
                    <p>Senin - Jumat 07:30 - 16:30 </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>dapensg@indo.net.id</h4>
                    <p>24/7 online support</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
              <h2 class="text_align_center">Kirim Pesan</h2>
              <div class="form_section">
                <form class="form_contant" action="{{ route('kontakkirim') }}" method="POST">
                    @csrf
                  <fieldset>
                  <div class="row">
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="Nama" name="nama" type="text">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="No Pensiun" name="nopeserta" type="text">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input class="field_custom" placeholder="No Hp" name="nohp" type="text">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <select name="kategori" class="field_custom">
                        <option value="Pembayaran Gaji Pensiun">Pembayaran Gaji Pensiun</option>
                        <option value="Informasi Lainnya">Informasi Lainnya</option>
                    </select>
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea class="field_custom" placeholder="Isi Pesan" name="pesan"></textarea>
                    </div>
                    <div class="center"><button class="btn main_bt" type="submit" name="submit" id="submit">SUBMIT NOW</button></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('injs')
@endsection
