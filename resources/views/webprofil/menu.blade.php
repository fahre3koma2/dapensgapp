<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" target="_blank" href="{!! url('login') !!}">Login</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="{{ url('webprof/images/logos/logo.png') }}" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="{!! url('/') !!}">Beranda</a></li>
                <li><a href="#">Profil</a>
                    <ul>
                        <li><a href="{!! url('profil/visimisi') !!}">Visi & Misi</a></li>
                        <li><a href="{!! url('profil/sejarah') !!}">Sejarah Pendirian</a></li>
                        <li><a href="{!! url('profil/pendiri') !!}">Pendiri</a></li>
                        <li><a href="{!! url('profil/struktur') !!}">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li> <a href="#">Layanan</a>
                    <ul>
                        <li><a href="{!! url('layanan/pengajuanpensiun') !!}">Pengajuan Pensiun</a></li>
                        <li><a href="{!! url('layanan/pengkiniandata') !!}">Pengkinian Data</a></li>
                        <li><a href="{!! url('layanan/laporberitaduka') !!}">Lapor Berita Duka</a></li>
                        <li><a href="{!! url('layanan/downform') !!}">Down Form</a></li>
                        <li><a href="{!! url('layanan/buktipotong') !!}">Bukti Potong Pajak</a></li>
                        <li><a href="{!! url('layanan/sosialmedia') !!}">Sosial Media DPSG</a></li>
                    </ul>
                </li>
                <li> <a href="#">Berita</a>
                    <ul>
                        <li><a href="{!! url('berita/galeri') !!}">Galeri</a></li>
                        <li><a href="{!! url('berita/artikel') !!}">Artikel</a></li>
                    </ul>
                </li>
                <li> <a href="#">Informasi</a>
                    <ul>
                        <li><a href="{!! url('informasi/pdp') !!}">PDP</a></li>
                        <li><a href="{!! url('informasi/laporankeuangan') !!}">Laporan Keuangan</a></li>
                        <li><a href="{!! url('informasi/panduan') !!}">Panduan</a></li>
                    </ul>
                </li>
                <li> <a href="{!! url('kontakkami/') !!}">Kontak Kami</a></li>
              </ul>
            </div>
            {{--  <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div>  --}}
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
