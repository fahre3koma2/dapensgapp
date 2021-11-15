<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Webp\BerandaController;
use App\Http\Controllers\Webp\ProfilController;
use App\Http\Controllers\Webp\BeritaController;
use App\Http\Controllers\Webp\InformasiController;
use App\Http\Controllers\Webp\LayananController;


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

    Route::resource('/admin/home', HomeController::class);

    Route::resource('/admin/user', UserController::class);

//Route::name('admin.')->prefix('admin')->middleware(['role:admin'])->group( function () {
    Route::post('/user/remove-role', [UserController::class, 'removeRole'])->name('remove-role');
    Route::post('/user/add-role', [UserController::class, 'addRole'])->name('add-role');
    // Route::post('/user/remove-role', [UserController::class, 'removeRole'])->name('remove-role');
    // Route::post('/user/add-role', [UserController::class, 'addRole'])->name('add-role');
//});

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {




});
