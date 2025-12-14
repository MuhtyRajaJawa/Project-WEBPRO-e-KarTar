<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function () {
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('admin.anggota.index');
    Route::get('/anggota/tambah', [AnggotaController::class, 'create'])->name('admin.anggota.create');
    Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('admin.anggota.store');
    Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('admin.anggota.edit');
    Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('admin.anggota.update');
    Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('admin.anggota.destroy');
});

// halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// setelah login redirect ke dashboard
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);

    // ✅ CRUD Anggota
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('admin.anggota.index');
    Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('admin.anggota.create');
    Route::post('/anggota', [AnggotaController::class, 'store'])->name('admin.anggota.store');
    Route::get('/anggota/{id}/edit', [AnggotaController::class, 'edit'])->name('admin.anggota.edit');
    Route::put('/anggota/{id}', [AnggotaController::class, 'update'])->name('admin.anggota.update');
    Route::delete('/anggota/{id}', [AnggotaController::class, 'destroy'])->name('admin.anggota.destroy');
});

Route::get('/admin/anggota', [\App\Http\Controllers\AnggotaController::class, 'index'])->name('admin.anggota.index');
Route::get('/admin/anggota/create', [\App\Http\Controllers\AnggotaController::class, 'create'])->name('admin.anggota.create');
Route::post('/admin/anggota', [\App\Http\Controllers\AnggotaController::class, 'store'])->name('admin.anggota.store');


Route::prefix('admin')->group(function () {
    Route::get('/anggota', [AnggotaController::class, 'index'])->name('admin.anggota.index');
    Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('admin.anggota.create');
    Route::post('/anggota/store', [AnggotaController::class, 'store'])->name('admin.anggota.store');
});

// TAMPILKAN FORM LOGIN (GET)
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])
    ->name('login.form');

// PROSES LOGIN (POST) – ini yang dipakai oleh action="{{ route('login') }}"
Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('login');

// BERANDA SETELAH LOGIN
Route::get('/admin/beranda', [AuthController::class, 'beranda'])
    ->name('admin.beranda')
    ->middleware('auth');




Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/admin/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    // BERANDA
    Route::get('/beranda', [AuthController::class, 'beranda'])->name('beranda');

    // ANGGOTA (kalau sudah pakai resource anggota)
    // Route::resource('anggota', AnggotaController::class)->except(['show']);

    // MENU DUMMY LAIN – sementara pakai closure dulu
    Route::get('/kegiatan', function () {
        return view('kegiatan.index');
    })->name('kegiatan.index');

    Route::get('/keuangan', function () {
        return view('keuangan.index');
    })->name('keuangan.index');

    Route::get('/laporan', function () {
        return view('laporan.index');
    })->name('laporan.index');

    Route::get('/berita', function () {
        return view('berita.index');
    })->name('berita.index');
});

// ========== CRUD KEGIATAN ==========
Route::prefix('admin')->name('admin.')->group(function () {

    // INDEX
    Route::get('/kegiatan', [App\Http\Controllers\KegiatanController::class, 'index'])
        ->name('kegiatan.index');

    // CREATE
    Route::get('/kegiatan/create', [App\Http\Controllers\KegiatanController::class, 'create'])
        ->name('kegiatan.create');

    // STORE
    Route::post('/kegiatan/store', [App\Http\Controllers\KegiatanController::class, 'store'])
        ->name('kegiatan.store');

    // SHOW DETAIL
    Route::get('/kegiatan/{id}', [App\Http\Controllers\KegiatanController::class, 'show'])
        ->name('kegiatan.show');

    // EDIT
    Route::get('/kegiatan/{id}/edit', [App\Http\Controllers\KegiatanController::class, 'edit'])
        ->name('kegiatan.edit');

    // UPDATE
    Route::put('/kegiatan/{id}', [App\Http\Controllers\KegiatanController::class, 'update'])
        ->name('kegiatan.update');

    // DELETE
    Route::delete('/kegiatan/{id}', [App\Http\Controllers\KegiatanController::class, 'destroy'])
        ->name('kegiatan.destroy');
});

Route::get('/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('admin.kegiatan.edit');
Route::put('/kegiatan/{id}', [KegiatanController::class, 'update'])->name('admin.kegiatan.update');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/keuangan', [App\Http\Controllers\KeuanganController::class, 'index'])->name('keuangan.index');
    Route::get('/keuangan/tambah', [App\Http\Controllers\KeuanganController::class, 'create'])->name('keuangan.create');
    Route::post('/keuangan/tambah', [App\Http\Controllers\KeuanganController::class, 'store'])->name('keuangan.store');

    Route::get('/keuangan/{id}/edit', [App\Http\Controllers\KeuanganController::class, 'edit'])->name('keuangan.edit');
    Route::put('/keuangan/{id}', [App\Http\Controllers\KeuanganController::class, 'update'])->name('keuangan.update');

    Route::delete('/keuangan/{id}', [App\Http\Controllers\KeuanganController::class, 'destroy'])->name('keuangan.destroy');

});

