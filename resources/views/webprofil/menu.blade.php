
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Jalan RA. Kartini No. 23 Gresik, 61122</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:dpsg@indo.net.id">dpsg@indo.net.id</a></span> </li>
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
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <button type="button" data-toggle="modal" data-target="#myModal" class="btn white_btn" >Login</button> </div>
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
          <div class="logo"> <a href="{!! url('/') !!}"><img src="{{ url('webprof/images/logos/logo.png') }}" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a href="{!! url('/') !!}">Beranda</a></li>
                <li><a href="#">Profil</a>
                    <ul>
                        <li><a href="{!! url('profil/visimisi') !!}">Visi & Misi </a></li>
                        <li><a href="{!! url('profil/sejarah') !!}">Sejarah Pendirian</a></li>
                        <li><a href="https://sig.id/id/profil-perusahaan/">Pendiri</a></li>
                        <li><a href="{!! url('profil/struktur') !!}">Struktur Organisasi</a></li>
                        <li><a href="{!! url('profil/budaya') !!}">Budaya Kerja</a></li>
                    </ul>
                </li>
                <li> <a href="#">Layanan</a>
                    <ul>
                        <li><a href="#">Pelaporan</a>
                             <ul>
                                <li><a href="{!! url('layanan/laporberitaduka') !!}">Laporan Berita Duka</a></li>
                                {{-- <li><a href="{!! url('layanan/laporanakmenikah') !!}">Laporan Anak Menikah</a></li>
                                <li><a href="{!! url('layanan/lapormenikahlagi') !!}">Laporan Menikah Lagi</a></li>
                                <li><a href="{!! url('layanan/laporanakbekerja') !!}">Laporan Anak Bekerja</a></li>
                                <li><a href="{!! url('layanan/laporbercerai') !!}">Laporan Pensiunan Bercerai</a></li> --}}
                            </ul>
                        </li>
                        <li><a @if ($stat == null) type="button" data-toggle="modal" data-target="#myModal" @else href="{!! url('home') !!}" @endif>Pengkinian Data</a></li>
                        <li><a href="#">Layanan Mandiri</a>
                            <ul>
                                <li><a @if ($stat == null) type="button" data-toggle="modal" data-target="#myModal" @else href="{!! url('home') !!}" @endif>Permintaan SK Penetapan MP</a></li>
                                <li><a @if ($stat == null) type="button" data-toggle="modal" data-target="#myModal" @else href="{!! url('home') !!}" @endif>Bukti Potong Pajak</a></li>
                                <li><a @if ($stat == null) type="button" data-toggle="modal" data-target="#myModal" @else href="{!! url('home') !!}" @endif>Bukti Slip Manfaat Pensiun</a></li>
                                <li><a @if ($stat == null) type="button" data-toggle="modal" data-target="#myModal" @else href="{!! url('home') !!}" @endif>Permintaan Surat Keterangan</a></li>
                                {{--  <li><a @if ($stat == null) type="button" data-toggle="modal" data-target="#myModal" @else href="{!! url('home') !!}" @endif>SK Kenaikan Pensiun</a></li>  --}}
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a href="#">Informasi</a>
                    <ul>
                        <li><a href="{!! url('informasi/pdp') !!}">PDP</a></li>
                        <li><a href="{!! url('informasi/laporankeuangan') !!}">Laporan Keuangan</a></li>
                        <li><a href="#">Panduan</a>
                            <ul>
                                <li><a href="{!! url('informasi/panduan-user/panduanpengkinian') !!}">Panduan Pengkinian Data</a></li>
                                <li><a href="{!! url('informasi/panduan-user/panduanlogin') !!}">Panduan Login</a></li>
                                <li><a href="{!! url('informasi/panduan-user/gantipassword') !!}">Panduan Lupa Password</a></li>
                                <li><a href="{!! url('informasi/panduan-user/panduanslipmp') !!}">Panduan Cetak Slip MP</a></li>

                                <li><a href="{!! url('informasi/panduan-user/panduanbuktipotong') !!}">Panduan Cetak Bukti Potong</a></li>
                                <li><a href="{!! url('informasi/panduan-user/panduanberitaduka') !!}">Panduan Pelaporan Berita Duka</a></li>
                                <li><a href="{!! url('informasi/panduan-user/panduanjandaduda') !!}">Panduan Permohonan Pembayaran MP Janda / Duda</a></li>
                                <li><a href="{!! url('informasi/panduan-user/panduananak') !!}">Panduan Permohonan pembayaran MP Anak</a></li>
                                <li><a href="{!! url('informasi/panduan-user/panduansketerangan') !!}">Panduan Permintaan Surat Keterangan</a></li>
                            </ul>
                        </li>
                        <li><a href="{!! url('informasi/downloadform') !!}">Unduh Formulir</a></li>
                    </ul>
                </li>
                <li> <a href="#">Berita</a>
                    <ul>
                        <li><a href="{!! url('/artikel/index/umum') !!}">Artikel Umum</a></li>
                        <li><a href="{!! url('/artikel/index/khusus') !!}">Artikel Khusus</a></li>
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
