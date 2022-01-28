<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BeritaController as BeradminController;
use App\Http\Controllers\Admin\KontenController;
use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\PengkinianController as AdminPengkinianController;
use App\Http\Controllers\Admin\PelayananController;
use App\Http\Controllers\Admin\PermohonanController as AdminPermohonanController;

use App\Http\Controllers\Webp\BerandaController;
use App\Http\Controllers\Webp\ProfilController;
use App\Http\Controllers\Webp\BeritaController;
use App\Http\Controllers\Webp\InformasiController;
use App\Http\Controllers\Webp\LayananController;
use App\Http\Controllers\Webp\ArtikelController;

use App\Http\Controllers\Dapen\PensiController;
use App\Http\Controllers\Dapen\InformasiController as InfoPensiController;
use App\Http\Controllers\Dapen\LayananController as InfoLayananController;
use App\Http\Controllers\Dapen\PermohonanController;
use App\Http\Controllers\Dapen\PermohonanAnakController;
use App\Http\Controllers\Dapen\KeluargaController;
use App\Http\Controllers\Dapen\PermohonanDudaJandaController;
use App\Http\Controllers\Dapen\PermohonanRekeningController;
use App\Http\Controllers\Dapen\PengkinianController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('webprofil.index');
// });

    Route::get('/', [BerandaController::class, 'index'])->name('index');
    //Profil
    Route::get('profil/visimisi', [ProfilController::class, 'visimisi'])->name('visimisi');
    Route::get('profil/sejarah', [ProfilController::class, 'sejarah'])->name('sejarah');
    Route::get('profil/pendiri', [ProfilController::class, 'pendiri'])->name('pendiri');
    Route::get('profil/struktur', [ProfilController::class, 'struktur'])->name('struktur');
    Route::get('profil/budaya', [ProfilController::class, 'budaya'])->name('budaya');
    Route::get('profil/homedetail/{id}', [ProfilController::class, 'homedetail'])->name('homedetail');

    //Layanan
    Route::get('layanan/pengajuanpensiun', [LayananController::class, 'pengajuanpensiun'])->name('pengajuanpensiun');
    Route::get('layanan/pengkiniandata', [LayananController::class, 'pengkiniandata'])->name('pengkiniandata');
    Route::get('layanan/laporberitaduka', [LayananController::class, 'laporberitaduka'])->name('laporberitaduka');
    Route::post('beritadukakirim', [LayananController::class, 'beritadukakirim'])->name('beritadukakirim');
    Route::get('terimaberita/{id}', [LayananController::class, 'terimaberita'])->name('terimaberita');
    Route::get('layanan/downform', [LayananController::class, 'downform'])->name('downform');
    Route::get('layanan/buktipotong', [LayananController::class, 'buktipotong'])->name('buktipotong');
    Route::get('layanan/sosialmedia', [LayananController::class, 'sosialmedia'])->name('sosialmedia');

    //Berita
    Route::get('berita/galeri', [BeritaController::class, 'galeri'])->name('galeri');
    Route::get('berita/artikel', [BeritaController::class, 'artikel'])->name('artikel');
    Route::resource('/artikel', ArtikelController::class);

    //Informasi
    Route::get('informasi/pdp', [InformasiController::class, 'pdp'])->name('pdp');
    Route::get('informasi/laporankeuangan', [InformasiController::class, 'laporankeuangan'])->name('laporankeuangan');
    Route::get('informasi/panduan', [InformasiController::class, 'panduan'])->name('panduan');
    Route::get('informasi/downloadform', [InformasiController::class, 'downloadform'])->name('downloadform');

    Route::get('kontakkami', [BerandaController::class, 'kontakkami'])->name('kontakkami');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::name('admin.')->prefix('admin')->middleware(['role:Admin|User'])->group( function () {

        Route::resource('/user', UserController::class);
        Route::get('/pensi', [UserController::class, 'pensi'])->name('pensi');
        Route::get('/pensi-tambah', [UserController::class, 'pensicreate'])->name('pensi-tambah');
        Route::get('/pensi-edit/{id}', [UserController::class, 'pensiedit'])->name('pensi-edit');
        Route::post('/pensi-foto', [UserController::class, 'uploadfoto'])->name('pensi-foto');

        Route::get('/konten/profilgambar', [KontenController::class, 'profilgambar'])->name('profilgambar');
        Route::get('/konten/visimisi', [KontenController::class, 'visimisi'])->name('visimisi');
        Route::get('/konten/sejarahpendirian', [KontenController::class, 'sejarahpendirian'])->name('sejarahpendirian');
        Route::get('/konten/pendiri', [KontenController::class, 'pendiri'])->name('pendiri');
        Route::get('/konten/strukturorganisasi', [KontenController::class, 'strukturorganisasi'])->name('strukturorganisasi');

        Route::resource('/artikel', AdminArtikelController::class);

        Route::resource('/pelayananan', PelayananController::class);
        Route::get('/pelayanan/skpenetapan', [PelayananController::class, 'skpenetapan'])->name('skpenetapan');
        Route::get('/pelayanan/sketerangan', [PelayananController::class, 'sketerangan'])->name('sketerangan');
        Route::get('/pelayanan/skpenetapanshow/{id}', [PelayananController::class, 'skpenetapanshow'])->name('skpenetapanshow');
        Route::get('/pelayanan/sketeranganshow/{id}', [PelayananController::class, 'sketeranganshow'])->name('sketeranganshow');
        Route::post('/pelayanan/skpermintaan', [PelayananController::class, 'skupdate'])->name('skpermintaan.verifikasi');

        Route::resource('/permohonan', AdminPermohonanController::class);
        Route::get('/permohonan-normal', [AdminPermohonanController::class, 'normal'])->name('permohonan-normal');
        Route::get('/permohonan-dudajanda', [AdminPermohonanController::class, 'dudajanda'])->name('permohonan-dudajanda');
        Route::get('/permohonan-anak', [AdminPermohonanController::class, 'anak'])->name('permohonan-anak');
        Route::get('/permohonan-rekening', [AdminPermohonanController::class, 'rekening'])->name('permohonan-rekening');

        Route::get('/permohonan-verifikasi/{id}/{jenis}', [AdminPermohonanController::class, 'verifikasi'])->name('permohonan.verifikasi');
        Route::get('/permohonan-verifikasikirim/{id}', [AdminPermohonanController::class, 'kirim'])->name('permohonanverifikasi.kirim');

        Route::get('/layanan/laporberitaduka', [LayananController::class, 'adminlaporberitaduka'])->name('laporberitaduka');
        Route::get('/layanan/cetakpengkiniandata/{id}', [InfoLayananController::class, 'cetakpengkiniandata'])->name('cetakpengkiniandata');

        Route::resource('/layanan/pengkiniandata', AdminPengkinianController::class);

        Route::post('/user/remove-role', [UserController::class, 'removeRole'])->name('remove-role');
        Route::post('/user/add-role', [UserController::class, 'addRole'])->name('add-role');

        //importfile
        Route::get('importfile', [UserController::class, 'importfile']);
        Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
    });

    Route::name('pensi.')->prefix('pensi')->middleware(['role:Pensiunan'])->group(function () {

        Route::resource('/pensiun', PensiController::class);

        Route::get('/profil', [PensiController::class, 'profil'])->name('profil');
        Route::get('/faq', [PensiController::class, 'faq'])->name('faq');
        Route::get('/datainfo', [PensiController::class, 'datainfo'])->name('datainfo');
        Route::get('/lampiran/{id}', [PensiController::class, 'lampiran'])->name('lampiran');

        Route::get('/uploadfoto', [PensiController::class, 'uploadfoto'])->name('uploadfoto');
        Route::post('/updatefoto', [PensiController::class, 'updatefoto'])->name('updatefoto');

        Route::get('/register', [PensiController::class, 'register'])->name('register');

        Route::get('/geoloc', [PensiController::class, 'geoloc'])->name('geoloc');

        Route::get('/downloadinfo', [InfoPensiController::class, 'downloadinfo'])->name('downloadinfo');
        Route::get('/layananinfo', [InfoLayananController::class, 'layananinfo'])->name('layananinfo');

        Route::get('/layanan/skpenetapan', [InfoLayananController::class, 'skpenetapan'])->name('skpenetapan');
        Route::get('/layanan/skpenetapan/tambah/{id}', [InfoLayananController::class, 'skpenetapancreate'])->name('skpenetapan.create');
        Route::post('/layanan/skpenetapan/kirim', [InfoLayananController::class, 'skpenetapanstore'])->name('skpenetapan.store');

        Route::get('/layanan/sketerangan', [InfoLayananController::class, 'sketerangan'])->name('sketerangan');
        Route::get('/layanan/sketerangan/tambah/{id}', [InfoLayananController::class, 'sketerangancreate'])->name('sketerangan.create');
        Route::post('/layanan/sketerangan/kirim', [InfoLayananController::class, 'sketeranganstore'])->name('sketerangan.store');

        Route::get('/layanan/buktislip', [InfoLayananController::class, 'buktislip'])->name('buktislip');
        Route::get('/layanan/buktipajak', [InfoLayananController::class, 'buktipajak'])->name('buktipajak');

        Route::resource('/permohonan', PermohonanController::class);

        Route::get('/permohonan/karyawan/form1/{id}', [PermohonanController::class, 'form1'])->name('permohonankaryawan-form1');
        Route::get('/permohonan/karyawan/form2/{id}', [PermohonanController::class, 'form2'])->name('permohonankaryawan-form2');
        Route::get('/permohonan/karyawan/form3/{id}', [PermohonanController::class, 'form3'])->name('permohonankaryawan-form3');

        Route::get('/permohonan/karyawan/formedit1/{id}', [PermohonanController::class, 'formedit1'])->name('permohonan.karyawan-formedit1');

        Route::post('/permohonan-upload', [PermohonanController::class, 'upload'])->name('permohonan.upload');
        Route::post('/permohonan-deletefile', [PermohonanController::class, 'deleteFile'])->name('permohonan.deletefile');
        Route::post('/permohonan-kirim/{id}', [PermohonanController::class, 'kirim'])->name('permohonan.kirim');

        Route::get('/permohonan/karyawan/formstore1/{id}', [PermohonanController::class, 'formstore1'])->name('permohonan.karyawan-formstore1');

        Route::resource('/permohonananak', PermohonanAnakController::class);

        Route::get('/permohonan/anak/form1/{id}', [PermohonanAnakController::class, 'form1'])->name('permohonananak-form1');
        Route::get('/permohonan/anak/form2/{id}', [PermohonanAnakController::class, 'form2'])->name('permohonananak-form2');
        Route::get('/permohonan/anak/form3/{id}', [PermohonanAnakController::class, 'form3'])->name('permohonananak-form3');
        Route::get('/permohonan/anak/form4/{id}', [PermohonanAnakController::class, 'form4'])->name('permohonananak-form4');

        Route::get('/permohonan/anak/formedit1/{id}', [PermohonanAnakController::class, 'formedit1'])->name('permohonan.anak-formedit1');

        Route::resource('/keluarga', KeluargaController::class);

        Route::post('/permohonananak-upload', [PermohonanAnakController::class, 'upload'])->name('permohonananak.upload');
        Route::post('/permohonananak-deletefile', [PermohonanAnakController::class, 'deleteFile'])->name('permohonananak.deletefile');
        Route::post('/permohonananak-kirim/{id}', [PermohonanAnakController::class, 'kirim'])->name('permohonananak.kirim');

        Route::resource('/permohonandudajanda', PermohonanDudaJandaController::class);

        Route::get('/permohonan/dudajanda/form1/{id}', [PermohonanDudaJandaController::class, 'form1'])->name('permohonandudajanda-form1');
        Route::get('/permohonan/dudajanda/form2/{id}', [PermohonanDudaJandaController::class, 'form2'])->name('permohonandudajanda-form2');
        Route::get('/permohonan/dudajanda/form3/{id}', [PermohonanDudaJandaController::class, 'form3'])->name('permohonandudajanda-form3');
        Route::get('/permohonan/dudajanda/form4/{id}', [PermohonanDudaJandaController::class, 'form4'])->name('permohonandudajanda-form4');

        Route::get('/permohonan/dudajanda/formedit1/{id}', [PermohonanDudaJandaController::class, 'formedit1'])->name('permohonandudajanda-formedit1');

        Route::post('/permohonandudajanda-upload', [PermohonanDudaJandaController::class, 'upload'])->name('permohonandudajanda.upload');
        Route::post('/permohonandudajanda-deletefile', [PermohonanDudaJandaController::class, 'deleteFile'])->name('permohonandudajanda.deletefile');
        Route::post('/permohonandudajanda-kirim/{id}', [PermohonanDudaJandaController::class, 'kirim'])->name('permohonandudajanda.kirim');

        Route::resource('/permohonanrekening', PermohonanRekeningController::class);

        Route::get('/permohonan/rekening/form1/{id}', [PermohonanRekeningController::class, 'form1'])->name('permohonanrekening-form1');
        Route::get('/permohonan/rekening/form2/{id}', [PermohonanRekeningController::class, 'form2'])->name('permohonanrekening-form2');
        Route::get('/permohonan/rekening/form3/{id}', [PermohonanRekeningController::class, 'form3'])->name('permohonanrekening-form3');

        Route::get('/permohonan/rekening/formedit1/{id}', [PermohonanRekeningController::class, 'formedit1'])->name('permohonanrekening-formedit1');

        Route::post('/permohonanrekening-upload', [PermohonanRekeningController::class, 'upload'])->name('permohonanrekening.upload');
        Route::post('/permohonanrekening-deletefile', [PermohonanRekeningController::class, 'deleteFile'])->name('permohonanrekening.deletefile');
        Route::post('/permohonanrekening-kirim/{id}', [PermohonanRekeningController::class, 'kirim'])->name('permohonanrekening.kirim');

        Route::get('/laporan/laporberitaduka', [InfoPensiController::class, 'laporberitaduka'])->name('laporan.laporberitaduka');

        Route::resource('/pengkinian', PengkinianController::class);

        Route::get('/pengkinian/form1/{id}', [PengkinianController::class, 'form1'])->name('pengkiniandata-form1');
        Route::get('/pengkinian/form2/{id}', [PengkinianController::class, 'form2'])->name('pengkiniandata-form2');
        Route::get('/pengkinian/form3/{id}', [PengkinianController::class, 'form3'])->name('pengkiniandata-form3');

        Route::get('/pengkinian/formedit1/{id}', [PengkinianController::class, 'formedit1'])->name('pengkiniandata-formedit1');

        Route::post('/pengkinian-upload', [PengkinianController::class, 'upload'])->name('pengkinian.upload');
        Route::post('/pengkinian-deletefile', [PengkinianController::class, 'deleteFile'])->name('pengkinian.deletefile');
        Route::post('/pengkinian-kirim/{id}', [PengkinianController::class, 'kirim'])->name('pengkinian.kirim');
    });
});
