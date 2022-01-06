
        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

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
        <li class="{{ $menu == 'laporan' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-doc"></i> <span> Laporan </span> </a>
            <ul>
                <li><a href="{!! url('informasi/pdp') !!}">Laporan Duka</a></li>
            </ul>
        </li>
        <li class="{{ $menu == 'layanan' ? 'active' : '' }}"> <a href="#"> <i class="icon-directions"></i> <span>Layanan</span> </a>
            <ul>
                <li><a href="{!! url('/pensi/layananinfo') !!}">SK Penetapan Manfaat</a></li>
                <li><a href="{!! url('/pensi/layananinfo') !!}">Bukti Potong Pajak</a></li>
                <li><a href="{!! url('/pensi/layananinfo') !!}">Bukti Slip Manfaat Pensiun</a></li>
                <li><a href="{!! url('/pensi/layananinfo') !!}">Penerbitan Kartu Pensiun</a></li>
                <li><a href="{!! url('/pensi/layananinfo') !!}">Penerbitan Surat Keterangan</a></li>
            </ul>
        </li>
        <li> <a href="#"> <i class="icon-directions"></i> <span>Informasi</span> </a>
            <ul>
                {{--  <li><a href="{!! url('pensi/faq') !!}">Panduan</a></li>  --}}
                <li><a href="{!! url('pensi/faq') !!}">Download</a>
                    <ul>
                        <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP</a></li>
                        <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP Sekaligus</a></li>
                        <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP Anak</a></li>
                        <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pindah Rekening</a></li>
                        <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP ke Waris</a></li>
                        <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Verifikasi Pengkinian Daya</a></li>
                        <li><a href="{!! url('/pensi/downloadinfo') !!}">Surat Kuasa</a></li>
                    </ul>
                </li>
                <li><a href="{!! url('pensi/faq') !!}">FAQ</a></li>
            </ul>
        </li>
        <li> <a href="#"> <i class="icon-book-open"></i> <span>Konten</span> </a>
          <ul>
            <li class="{{ $menu == 'konten' ? 'active' : '' }}"><a href="{!! url('admin/konten/profilgambar') !!}"><i class="fa fa-angle-right"></i> Konten Gambar</a></li>
            <li class="{{ $menu == 'artikel' ? 'active' : '' }}"><a href="{!! url('admin/artikel') !!}"><i class="fa fa-angle-right"></i> Artikel</a></li>
          </ul>
        </li>
        <li> <a href="#"> <i class="icon-info"></i> <span>Informasi</span> </a>
          <ul>
            <li class="{{ $menu == 'pdp' ? 'active' : '' }}"><a href="{!! url('admin/konten/galeri') !!}"><i class="fa fa-angle-right"></i> PDP</a></li>
            <li class="{{ $menu == 'laporankeuangan' ? 'active' : '' }}"><a href="{!! url('admin/konten/laporankeuangan') !!}"><i class="fa fa-angle-right"></i> Laporan Keuangan</a></li>
            <li class="{{ $menu == 'panduan' ? 'active' : '' }}"><a href="{!! url('admin/konten/panduan') !!}"><i class="fa fa-angle-right"></i> Panduan</a></li>
          </ul>
        </li>

