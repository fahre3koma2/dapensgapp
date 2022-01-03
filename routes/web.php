<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BeritaController as BeradminController;
use App\Http\Controllers\Admin\KontenController;
use App\Http\Controllers\Admin\ArtikelController;

use App\Http\Controllers\Webp\BerandaController;
use App\Http\Controllers\Webp\ProfilController;
use App\Http\Controllers\Webp\BeritaController;
use App\Http\Controllers\Webp\InformasiController;
use App\Http\Controllers\Webp\LayananController;

use App\Http\Controllers\Dapen\PensiController;
use App\Http\Controllers\Dapen\InformasiController as InfoPensiController;
use App\Http\Controllers\Dapen\LayananController as InfoLayananController;

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

    //Layanan
    Route::get('layanan/pengajuanpensiun', [LayananController::class, 'pengajuanpensiun'])->name('pengajuanpensiun');
    Route::get('layanan/pengkiniandata', [LayananController::class, 'pengkiniandata'])->name('pengkiniandata');
    Route::get('layanan/laporberitaduka', [LayananController::class, 'laporberitaduka'])->name('laporberitaduka');
    Route::get('layanan/downform', [LayananController::class, 'downform'])->name('downform');
    Route::get('layanan/buktipotong', [LayananController::class, 'buktipotong'])->name('buktipotong');
    Route::get('layanan/sosialmedia', [LayananController::class, 'sosialmedia'])->name('sosialmedia');

    //Berita
    Route::get('berita/galeri', [BeritaController::class, 'galeri'])->name('galeri');
    Route::get('berita/artikel', [BeritaController::class, 'artikel'])->name('artikel');

    //Informasi
    Route::get('informasi/pdp', [InformasiController::class, 'pdp'])->name('pdp');
    Route::get('informasi/laporankeuangan', [InformasiController::class, 'laporankeuangan'])->name('laporankeuangan');
    Route::get('informasi/panduan', [InformasiController::class, 'panduan'])->name('panduan');

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

        Route::resource('/artikel', ArtikelController::class);

        Route::post('/user/remove-role', [UserController::class, 'removeRole'])->name('remove-role');
        Route::post('/user/add-role', [UserController::class, 'addRole'])->name('add-role');
        // Route::post('/user/remove-role', [UserController::class, 'removeRole'])->name('remove-role');
        // Route::post('/user/add-role', [UserController::class, 'addRole'])->name('add-role');

        Route::get('importfile', [UserController::class, 'importfile']);
        Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
    });

    Route::name('pensi.')->prefix('pensi')->middleware(['role:Pensiunan'])->group(function () {

        Route::resource('/pensiun', PensiController::class);

        Route::get('/profil', [PensiController::class, 'profil'])->name('profil');
        Route::get('/faq', [PensiController::class, 'faq'])->name('faq');
        Route::get('/datainfo', [PensiController::class, 'datainfo'])->name('datainfo');

        Route::get('/uploadfoto', [PensiController::class, 'uploadfoto'])->name('uploadfoto');
        Route::post('/updatefoto', [PensiController::class, 'updatefoto'])->name('updatefoto');

        Route::get('/register', [PensiController::class, 'register'])->name('register');

        Route::get('/geoloc', [PensiController::class, 'geoloc'])->name('geoloc');

        Route::get('/downloadinfo', [InfoPensiController::class, 'downloadinfo'])->name('downloadinfo');
        Route::get('/layananinfo', [InfoLayananController::class, 'layananinfo'])->name('layananinfo');
    });
});
