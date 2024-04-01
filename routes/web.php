<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IbadahRayaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\GerejaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\AyatController;
use App\Http\Controllers\WartaController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\PartamianganController;

// Route::get('/', function () {
//     return view('home/home');
// });

Route::get('/', [HomeController::class, 'view_home']);


Route::get('login', [AuthController::class, 'login']);
Route::post('login', [AuthController::class, 'auth_login']);

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'create_user']);

Route::get('logout', [AuthController::class, 'logout']);


Route::get('gereja/sejarah', [SejarahController::class, 'overview']);

Route::get('bph', [GerejaController::class, 'view_bph']);

Route::get('laporan/persembahan', [KeuanganController::class, 'laporan']);
Route::get('laporan/kas', [KasController::class, 'laporan_kas']);


Route::get('ibadah_raya', function () {
    return view('acara/ibadah_raya');
});

Route::get('acara/upcoming', [AcaraController::class, 'view_upcoming']);
Route::get('acara/upcoming_single/{id}', [AcaraController::class, 'upcoming_single']);



Route::get('acara/partamiangan', [PartamianganController::class, 'partamianganview']);

Route::get('laporan/kas_single/{id}', [KasController::class, 'kas_detail']);



Route::middleware(['auth'])->group(function () {

    //acara route
    Route::get('acara/upcoming/list_acara', [AcaraController::class, 'upcoming_view']);
    Route::get('acara/upcoming/tambah_upcoming', [AcaraController::class, 'tambah_upcoming']);
    Route::post('acara/upcoming/tambah_upcoming', [AcaraController::class, 'insert_upcoming'])->name('acara.upcoming.tambah_upcoming');
    Route::get('acara/upcoming/edit/{id}', [AcaraController::class, 'edit_upcoming'])->name('acara.upcoming.edit');
    Route::put('acara/upcoming/update/{id}', [AcaraController::class, 'update_upcoming']);
    Route::delete('acara/upcoming/delete/{id}', [AcaraController::class, 'destroy_upcoming'])->name('acara.upcoming.delete');

    //ibadah raya route
    Route::get('acara/ibadah_raya/list_acara', [IbadahRayaController::class, 'listAcara']);
    Route::get('acara/ibadah_raya/tambah_acara', [IbadahRayaController::class, 'tambahAcara']);
    Route::post('acara/ibadah_raya/tambah_acara', [IbadahRayaController::class, 'insertIbadah'])->name('insert_ibadah');

    //partamiangan route
    Route::get('acara/partamiangan/list_acara', [PartamianganController::class, 'listPartamiangan']);
    Route::get('acara/partamiangan/tambah_acara', [PartamianganController::class, 'addPartamiangan']);
    Route::post('acara/partamiangan/tambah_acara', [PartamianganController::class, 'storePartamiangan']);





    //gereja route
    Route::get('gereja/sejarah/add.blade.php', [GerejaController::class, 'add']);

    //bph
    Route::get('gereja/bph/add', [GerejaController::class, 'add_bph']);
    Route::post('gereja/bph/add', [GerejaController::class, 'post_bph']);
    Route::get('gereja/bph/list', [GerejaController::class, 'list_bph']);

    //pendeta
    Route::get('gereja/pendeta/add', [GerejaController::class, 'add_pendeta']);
    Route::post('gereja/pendeta/add', [GerejaController::class, 'store_pendeta']);
    Route::get('gereja/pendeta/list', [GerejaController::class, 'list_pendeta']);


    //keuangan route
    Route::get('keuangan/persembahan/list_keuangan', [KeuanganController::class, 'keuangan']);
    Route::get('keuangan/persembahan/edit_keuangan/{id}', [KeuanganController::class, 'edit_keuangan']);
    Route::post('keuangan/persembahan/edit_keuangan/{id}', [KeuanganController::class, 'update_keuangan']);
    Route::get('keuangan/persembahan/hapus_keuangan/{id}', [KeuanganController::class, 'hapus_keuangan']);
    Route::get('keuangan/persembahan/tambah_keuangan', [KeuanganController::class, 'tambah_keuangan']);
    Route::post('keuangan/persembahan/tambah_keuangan', [KeuanganController::class, 'insert_keuangan']);


    Route::get('keuangan/landing', [KeuanganController::class, 'landing']);

       // Kas route
       Route::get('keuangan/kas/list_kas', [KasController::class, 'kas']);
       Route::get('keuangan/kas/edit_kas', [KasController::class, 'edit_kas'])->name('kas.edit');
       Route::get('keuangan/kas/tambah_kas', [KasController::class, 'tambah_kas']);
       Route::post('keuangan/kas/tambah_kas', [KasController::class, 'insert_kas']);


    //berita route
    Route::get('berita/dukacita/list_berita', [BeritaController::class, 'list_berita']);


    //ayat route
    Route::get('ayat_harian/list_ayat', [AyatController::class, 'ayat']);
    Route::get('ayat_harian/tambah_ayat', [AyatController::class, 'tambah_ayat']);
    Route::get('ayat_harian/edit_ayat', [AyatController::class, 'edit_ayat']);


    //warta route
    Route::get('warta/list_warta', [WartaController::class, 'warta']);
    Route::get('warta/tambah_warta', [WartaController::class, 'tambah_warta']);
    Route::get('warta/edit_warta', [WartaController::class, 'edit_warta']);


    //sejarah route
    Route::get('gereja/sejarah/view_sejarah', [SejarahController::class, 'view']);
    Route::get('gereja/sejarah/add', [SejarahController::class, 'sejarah1']);
    Route::post('gereja/sejarah/add', [SejarahController::class, 'store']);



});

