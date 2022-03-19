
    <li class="{{ $menu == 'home' ? 'active' : '' }}"> <a href="{!! url('/home') !!}"> <i class="icon-home" style="color:black"></i> <span> Home </span> </a> </li>
    <li class="{{ $menu == 'profil' ? 'active' : '' }}"> <a href="{!! url('pensi/pensiun/'.$idpensi ) !!}"> <i class="icon-user-following" style="color:black"></i> <span> Data Pribadi </span> </a>
        {{--  <ul>
            <li><a href="{!! url('pensi/pensiun/'.$idpensi ) !!}">Identitas</a></li>
        </ul>  --}}
    </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-share-alt" style="color:black"></i> <span> Layanan </span> </a>
        <ul>
            <li><a href="#">Laporan</a>
                 <ul>
                    <li><a href="{!! url('pensi/laporan/laporberitaduka') !!}">Laporan Duka</a></li>
                </ul>
            </li>
            <li><a href="{!! url('pensi/pengkinian') !!}">Pengkinian Data</a></li>
            <li><a href="#">Layanan Mandiri</a>
                <ul>
                    <li><a href="{!! url('/pensi/layanan/skpenetapan') !!}">SK Penetapan MP</a></li>
                    <li><a href="{!! url('/pensi/layanan/buktipajak') !!}">Bukti Potong Pajak</a></li>
                    <li><a href="{!! url('/pensi/layanan/buktislip') !!}">Bukti Slip MP</a></li>
                    <li><a href="{!! url('/pensi/layanan/sketerangan') !!}">Penerbitan Surat Keterangan</a></li>
                    {{--  <li><a href="{!! url('/pensi/layanan/skkenaikan') !!}">SK Kenaikan Pensiun</a></li>  --}}
                </ul>
            </li>
        </ul>
    </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="#"> <i class="icon-share-alt" style="color:black"></i> <span> Permohonan </span> </a>
        <ul>
            <li><a href="{!! url('/pensi/permohonandudajanda ') !!}">Permohonan Pembayaran MP Janda/Duda</a></li>
            {{--  <li><a href="{!! url('/pensi/permohonan') !!}">Permohonan Pembayaran MP </a></li>  --}}
            <li><a href="{!! url('/pensi/permohonananak') !!}">Permohonan Pembayaran MP Anak</a></li>
            {{--  <li><a href="{!! url('/pensi/permohonanrekening') !!}">Permohonan Pindah Rekening</a></li>  --}}
        </ul>
    </li>
    <li class="{{ $menu == 'faq' ? 'active' : '' }}"> <a href="#"> <i class="icon-question" style="color:black"></i> <span> Informasi </span> </a>
        <ul>
            <li><a href="#">Panduan</a>
                <ul>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduanpengkinian') !!}">Panduan Pengkinian Data</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduanlogin') !!}">Panduan Login</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/gantipassword') !!}">Panduan Lupa Password</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduanslipmp') !!}">Panduan Cetak Slip MP</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduanbuktipotong') !!}">Panduan Cetak Bukti Potong</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduanberitaduka') !!}">Panduan Pelaporan Berita Duka</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduanjandaduda') !!}">Panduan Permohonan Pembayarn MP Janda / Duda</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduananak') !!}">Panduan Permohonan pembayaran MP Anak</a></li>
                    <li><a href="{!! url('/pensi/informasi/panduan-user/panduansketerangan') !!}">Panduan Permintaan Surat Keterangan</a></li>
                </ul>
            </li>
        </ul>
    </li>
    {{--  <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-bubbles"></i> <span> Kontak Kami </span> </a> </li>  --}}
