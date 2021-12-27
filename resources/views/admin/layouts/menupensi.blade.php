
    <li class="{{ $menu == 'home' ? 'active' : '' }}"> <a href="{!! url('/home') !!}"> <i class="icon-home"></i> <span> Home </span> </a> </li>
    <li class="{{ $menu == 'profil' ? 'active' : '' }}"> <a href="{!! url('pensi/pensiun/'.$idpensi ) !!}"> <i class="icon-user-following"></i> <span> Data Pribadi </span> </a> </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-doc"></i> <span> Laporan </span> </a> </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-share-alt"></i> <span> Layanan </span> </a>
        <ul>
            <li><a href="{!! url('admin/konten/panduan') !!}">SK Penetapan</a></li>
            <li><a href="{!! url('admin/konten/panduan') !!}">Slip MP</a></li>
            <li><a href="{!! url('admin/konten/panduan') !!}">Permohonan Pindah Rekening</a></li>
            <li><a href="{!! url('admin/konten/panduan') !!}">Penerbitan Kartu Pensiun</a></li>
            <li><a href="{!! url('admin/konten/panduan') !!}">Penerbitan Surat Keterangan</a></li>
        </ul>
    </li>
    <li class="{{ $menu == 'faq' ? 'active' : '' }}"> <a href="{!! url('pensi/faq') !!}"> <i class="icon-question"></i> <span> Informasi </span> </a>
        <ul>
            <li><a href="{!! url('pensi/faq') !!}">Panduan</a></li>
            <li><a href="{!! url('pensi/faq') !!}">FAQ</a></li>
        </ul>
    </li>
    <li class="{{ $menu == 'galeri' ? 'active' : '' }}"> <a href="{!! url('admin/konten/galeri') !!}"> <i class="icon-bubbles"></i> <span> Kontak Kami </span> </a> </li>
