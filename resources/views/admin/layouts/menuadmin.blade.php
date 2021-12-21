
        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li> <a href="#"> <i class="icon-home"></i> <span>Data Master</span> </a>
          <ul>
            <li class="{{ $menu == 'user' ? 'active' : '' }}"><a href="{!! url('admin/user') !!}"><i class="fa fa-angle-right"></i> User</a></li>
            <li class="{{ $menu == 'user' ? 'active' : '' }}"><a href="{!! url('admin/konten/profilgambar') !!}"><i class="fa fa-angle-right"></i> Konten Gambar</a></li>
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
        <li> <a href="#"> <i class="icon-directions"></i> <span>Layanan</span> </a>
          <ul>
            <li class="{{ $menu == 'beritaduka' ? 'active' : '' }}"><a href="{!! url('admin/laporberitaduka') !!}"><i class="fa fa-angle-right"></i> Laporan Berita Duka</a></li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-book-open"></i> <span>Berita</span> </a>
          <ul>
            <li class="{{ $menu == 'galeri' ? 'active' : '' }}"><a href="{!! url('admin/konten/galeri') !!}"><i class="fa fa-angle-right"></i> Galeri</a></li>
            <li class="{{ $menu == 'artikel' ? 'active' : '' }}"><a href="{!! url('admin/konten/artikel') !!}"><i class="fa fa-angle-right"></i> Artikel</a></li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-info"></i> <span>Informasi</span> </a>
          <ul>
            <li class="{{ $menu == 'pdp' ? 'active' : '' }}"><a href="{!! url('admin/konten/galeri') !!}"><i class="fa fa-angle-right"></i> PDP</a></li>
            <li class="{{ $menu == 'laporankeuangan' ? 'active' : '' }}"><a href="{!! url('admin/konten/laporankeuangan') !!}"><i class="fa fa-angle-right"></i> Laporan Keuangan</a></li>
            <li class="{{ $menu == 'panduan' ? 'active' : '' }}"><a href="{!! url('admin/konten/panduan') !!}"><i class="fa fa-angle-right"></i> Panduan</a></li>
          </ul>
        </li>

