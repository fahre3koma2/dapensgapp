
        <li><a href="{!! url('home') !!}"><i class="fa fa-dashboard" style="color:black"></i> <span>Dashboard</span></a></li>
        <li> <a href="#"> <i class="icon-home" style="color:black"></i> <span>Data Master</span> </a>
          <ul>
            <li class="{{ $menu == 'pensi' ? 'active' : '' }}"><a href="{!! url('admin/pensi') !!}"><i class="fa fa-angle-right"></i> Pensiunan</a></li>
            <li class="{{ $menu == 'periode' ? 'active' : '' }}"><a href="{!! url('admin/seting-periode') !!}"><i class="fa fa-angle-right"></i> Periode</a></li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-speech" style="color:black"></i> <span>Profil</span> </a>
          <ul>
            <li class="{{ $menu == 'visimisi' ? 'active' : '' }}"><a href="{!! url('admin/konten/visimisi') !!}"><i class="fa fa-angle-right"></i> Visi Misi</a></li>
            <li class="{{ $menu == 'sejarahpendirian' ? 'active' : '' }}"><a href="{!! url('admin/konten/sejarahpendirian') !!}"><i class="fa fa-angle-right"></i> Sejarah Pendirian</a></li>
            {{--  <li class="{{ $menu == 'strukturorganisasi' ? 'active' : '' }}"><a href="{!! url('admin/konten/strukturorganisasi') !!}"><i class="fa fa-angle-right"></i> Struktur Organisasi</a></li>  --}}
          </ul>
        </li>
        <li class="{{ $menu == 'layanan' ? 'active' : '' }}"> <a href="#"> <i class="icon-directions" style="color:black"></i> <span>Layanan</span> </a>
            <ul>
                {{--  <li class="{{ $menu == 'layanan' ? 'active' : '' }}"><a href="{!! url('admin/layanan/laporberitaduka') !!}">Laporan</a>  --}}
                <li class="{{ $menu == 'layanan' ? 'active' : '' }}"><a href="#">Laporan</a>
                    <ul>
                        <li><a href="{!! url('/admin/laporan-beritaduka') !!}">Laporan Berita Duka</a></li>
                        {{--  <li><a href="{!! url('/admin/laporan-anakmenikah ') !!}">Laporan Anak Menikah</a></li>
                        <li><a href="{!! url('/admin/laporan-menikahlagi') !!}">Laporan Menikah Lagi </a></li>
                        <li><a href="{!! url('/admin/laporan-anakbekerja') !!}">Laporan Anak Sudah Bekerja</a></li>
                        <li><a href="{!! url('/admin/laporan-bercerai') !!}">Laporan Pensiunan Bercerai</a></li>  --}}
                    </ul>
                </li>
                <li><a href="{!! url('admin/layanan/pengkiniandata') !!}">Pengkinian Data</a></li>
                <li><a href="{!! url('admin/pelayanan/sketerangan') !!}">Penerbitan Surat Keterangan</a></li>
                <li><a href="{!! url('admin/pelayanan/kontakkami') !!}">Kontak Kami</a></li>
            </ul>
        </li>
        <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-share-alt" style="color:black"></i> <span> Permohonan </span> </a>
            <ul>
                <li><a href="{!! url('/admin/permohonan-dudajanda ') !!}">Permohonan Pembayaran MP Janda/Duda</a></li>
                <li><a href="{!! url('/admin/permohonan-anak') !!}">Permohonan Pembayaran MP Anak</a></li>
                {{--  <li><a href="{!! url('/admin/permohonan-normal') !!}">Permohonan Pembayaran MP </a></li>
                 <li><a href="{!! url('/admin/permohonan-normal') !!}">Permohonan Pembayaran MP Normal</a></li>
                <li><a href="{!! url('/admin/permohonan-rekening') !!}">Permohonan Pindah Rekening</a></li>  --}}
            </ul>
        </li>
        <li> <a href="#"> <i class="icon-directions" style="color:black"></i> <span>Informasi</span> </a>
            <ul>
                <li><a href="{!! url('admin/seting-panduan') !!}">Panduan</a></li>
                {{--  <li><a href="{!! url('pensi/faq') !!}">Download</a></li>
                <li><a href="{!! url('pensi/faq') !!}">FAQ</a></li>  --}}
            </ul>
        </li>
        <li> <a href="#"> <i class="icon-book-open" style="color:black"></i> <span>Konten</span> </a>
          <ul>
              <li class="{{ $menu == 'konten' ? 'active' : '' }}"><a href="{!! url('admin/konten/beranda') !!}"><i class="fa fa-angle-right"></i> Beranda</a></li>
              <li class="{{ $menu == 'konten' ? 'active' : '' }}"><a href="{!! url('admin/galeri') !!}"><i class="fa fa-angle-right"></i> Galeri</a></li>
            <li class="{{ $menu == 'konten' ? 'active' : '' }}"><a href="{!! url('admin/konten/profilgambar') !!}"><i class="fa fa-angle-right"></i> Konten Gambar</a></li>
            <li class="{{ $menu == 'artikel' ? 'active' : '' }}"><a href="#"><i class="fa fa-angle-right"></i> Artikel</a>
                <ul>
                    <li><a href="{!! url('admin/artikel/index/umum') !!}">Umum</a></li>
                    <li><a href="{!! url('admin/artikel/index/khusus') !!}">Khusus</a></li>
                </ul>
            </li>
          </ul>
        </li>
