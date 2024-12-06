<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotulensiController;
use App\Livewire\Undangan;
use App\Livewire\SuratUndangan;
use App\Livewire\UndanganLainnya;
use App\Livewire\UploadUndangan;
use App\Livewire\Sidebar;
use App\Livewire\Notulensi;
use App\Livewire\TindakLanjutNotulensi;
use App\Livewire\TambahtindakLanjutNotulensi;
use App\Livewire\DaftarHadir;
use App\Livewire\TambahAnggota;
use App\Livewire\BeritaAcara;
use App\Livewire\UploadDokumen;
use App\Livewire\HalamanNotulensi;
use App\Livewire\HalamanDaftarHadir;
use App\Livewire\LihatDaftarHadir;

// Route::get('/', function () {
    // return view('welcome');
// });
Route::get('/', function () {
    return redirect()->route('register');
});
// Route::get('/', \App\Livewire\Undangan::class);

//route untuk login
Route::get('/undangan', \App\Livewire\Undangan::class)->middleware(['auth:sanctum', 'verified']);


// Routes for Livewire components
Route::get('/undangan', Undangan::class);
Route::get('/suratundangan', SuratUndangan::class);
Route::get('/undanganlainnya', UndanganLainnya::class);
Route::get('/sidebar', Sidebar::class);
Route::get('/uploadUndangan', UploadUndangan::class);
Route::get('/notulensi', Notulensi::class);
Route::get('/tindakLanjut', TindakLanjutNotulensi::class);
Route::get('/tambahtindakLanjut', TambahtindakLanjutNotulensi::class);
Route::get('/daftarhadir', DaftarHadir::class);
Route::get('/tambahanggota', TambahAnggota::class);
Route::get('/beritaacara', BeritaAcara::class);
Route::get('/uploaddokumen', UploadDokumen::class);
Route::get('/halamannotulensi', HalamanNotulensi::class);
Route::get('/halamandaftarhadir', HalamanDaftarHadir::class);
Route::get('/lihatdaftarhadir', LihatDaftarHadir::class);

// Routes for NotulensiController
Route::get('/halamannotulensi', HalamanNotulensi::class, [NotulensiController::class, 'index'])->name('notulensi.index');  // Form display route
// Route::get('/halamannotulensi/download/{id}', [NotulensiController::class, 'download'])->name('notulensi.download');
Route::get('/notulensi/pdf/{id}', [NotulensiController::class, 'generatePDF'])->name('notulensi.pdf');
Route::get('/notulensi', Notulensi::class, [NotulensiController::class, 'create'])->name('notulensi.create');  // Form display route
Route::post('/notulensi', [NotulensiController::class, 'store'])->name('notulensi.store');  // Form submission route

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/undangan', Undangan::class,function () {
        return view('livewire.undangan');
    })->name('dashboard');
});
