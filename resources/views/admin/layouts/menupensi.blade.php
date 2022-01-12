
    <li class="{{ $menu == 'home' ? 'active' : '' }}"> <a href="{!! url('/home') !!}"> <i class="icon-home"></i> <span> Home </span> </a> </li>
    <li class="{{ $menu == 'profil' ? 'active' : '' }}"> <a href="{!! url('pensi/pensiun/'.$idpensi ) !!}"> <i class="icon-user-following"></i> <span> Data Pribadi </span> </a>
        <ul>
            <li><a href="{!! url('/pensi/lampiran/'.$idpensi) !!}">Lampiran</a></li>
        </ul>
    </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-doc"></i> <span> Laporan </span> </a>
         <ul>
            <li><a href="{!! url('pensi/laporan/laporberitaduka') !!}">Laporan Duka</a></li>
        </ul>
    </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-share-alt"></i> <span> Layanan </span> </a>
        <ul>
            <li><a href="{!! url('/pensi/layananinfo') !!}">SK Penetapan Manfaat</a></li>
            <li><a href="{!! url('/pensi/layananinfo') !!}">Bukti Potong Pajak</a></li>
            <li><a href="{!! url('/pensi/layananinfo') !!}">Bukti Slip Manfaat Pensiun</a></li>
            <li><a href="{!! url('/pensi/layananinfo') !!}">Penerbitan Kartu Pensiun</a></li>
            <li><a href="{!! url('/pensi/layananinfo') !!}">Penerbitan Surat Keterangan</a></li>
        </ul>
    </li>
    <li class="{{ $menu == 'faq' ? 'active' : '' }}"> <a href="{!! url('pensi/faq') !!}"> <i class="icon-question"></i> <span> Informasi </span> </a>
        <ul>
            <li><a href="{!! url('pensi/faq') !!}">Panduan</a></li>
            <li><a href="{!! url('pensi/faq') !!}">Download</a>
                {{--  <ul>
                    <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP</a></li>
                    <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP Sekaligus</a></li>
                    <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP Anak</a></li>
                    <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pindah Rekening</a></li>
                    <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Pembayaran MP ke Waris</a></li>
                    <li><a href="{!! url('/pensi/downloadinfo') !!}">Permohonan Verifikasi Pengkinian Daya</a></li>
                    <li><a href="{!! url('/pensi/downloadinfo') !!}">Surat Kuasa</a></li>
                </ul>  --}}
            </li>
            <li><a href="{!! url('pensi/faq') !!}">FAQ</a></li>
        </ul>
    </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-share-alt"></i> <span> Permohonan </span> </a>
        <ul>
            <li><a href="{!! url('/pensi/permohonan') !!}">Permohonan Pembayaran MP</a></li>
            <li><a href="#">Permohonan Pembayaran MP Anak</a></li>
            <li><a href="#">Permohonan Pindah Rekening</a></li>
            <li><a href="#">Permohonan Pembayaran MP ke Waris</a></li>
            <li><a href="#">Permohonan Verifikasi Pengkinian Daya</a></li>
            <li><a href="#">Surat Kuasa</a></li>
        </ul>
    </li>
    {{--  <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-bubbles"></i> <span> Kontak Kami </span> </a> </li>  --}}
