
        <li><a href="{!! url('home') !!}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li> <a href="#"> <i class="icon-home"></i> <span>Data Master</span> </a>
          <ul>
            <li class="{{ $menu == 'pegawai' ? 'active' : '' }}"><a href="{!! url('admin/user') !!}"><i class="fa fa-angle-right"></i> Pegawai</a></li>
            <li class="{{ $menu == 'pensi' ? 'active' : '' }}"><a href="{!! url('admin/pensi') !!}"><i class="fa fa-angle-right"></i> Pensiunan</a></li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-speech"></i> <span>Profil</span> </a>
          <ul>
            <li class="{{ $menu == 'visimisi' ? 'active' : '' }}"><a href="{!! url('admin/konten/visimisi') !!}"><i class="fa fa-angle-right"></i> Visi Misi</a></li>
            <li class="{{ $menu == 'sejarahpendirian' ? 'active' : '' }}"><a href="{!! url('admin/konten/sejarahpendirian') !!}"><i class="fa fa-angle-right"></i> Sejarah Pendirian</a></li>
            <li class="{{ $menu == 'pendiri' ? 'active' : '' }}"><a href="{!! url('admin/konten/pendiri') !!}"><i class="fa fa-angle-right"></i> Pendiri</a></li>
            <li class="{{ $menu == 'strukturorganisasi' ? 'active' : '' }}"><a href="{!! url('admin/konten/strukturorganisasi') !!}"><i class="fa fa-angle-right"></i> Struktur Organisasi</a></li>
          </ul>
        </li>
        <li class="{{ $menu == 'layanan' ? 'active' : '' }}"> <a href="#"> <i class="icon-directions"></i> <span>Layanan</span> </a>
            <ul>
                <li class="{{ $menu == 'layanan' ? 'active' : '' }}"><a href="{!! url('admin/layanan/laporberitaduka') !!}">Laporan Berita Duka</a></li>
                <li><a href="{!! url('admin/layanan/pengkiniandata') !!}">Pengkinian Data</a></li>
                <li><a href="{!! url('/pensi/layananinfo') !!}">SK Penetapan Manfaat</a></li>
                <li><a href="{!! url('/pensi/layananinfo') !!}">Bukti Potong Pajak</a></li>
                <li><a href="{!! url('/pensi/layananinfo') !!}">Bukti Slip Manfaat Pensiun</a></li>
                {{--  <li><a href="{!! url('/pensi/layananinfo') !!}">Penerbitan Kartu Pensiun</a></li>  --}}
                <li><a href="{!! url('/pensi/layananinfo') !!}">Penerbitan Surat Keterangan</a></li>
            </ul>
        </li>
        <li> <a href="#"> <i class="icon-directions"></i> <span>Informasi</span> </a>
            <ul>
                <li><a href="{!! url('pensi/faq') !!}">Panduan</a></li>
                <li><a href="{!! url('pensi/faq') !!}">Download</a></li>
                <li><a href="{!! url('pensi/faq') !!}">FAQ</a></li>
            </ul>
        </li>
        <li> <a href="#"> <i class="icon-book-open"></i> <span>Konten</span> </a>
          <ul>
            <li class="{{ $menu == 'konten' ? 'active' : '' }}"><a href="{!! url('admin/konten/profilgambar') !!}"><i class="fa fa-angle-right"></i> Konten Gambar</a></li>
            <li class="{{ $menu == 'artikel' ? 'active' : '' }}"><a href="{!! url('admin/artikel') !!}"><i class="fa fa-angle-right"></i> Artikel</a></li>
          </ul>
        </li>
