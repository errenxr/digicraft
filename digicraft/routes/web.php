<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PesananController;
use SebastianBergmann\CodeCoverage\Report\Html\CustomCssFile;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('regis.tampil');
Route::post('/registrasi/submit', [AuthController::class, 'submitRegistrasi'])->name('regis.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::group(['middleware'=>'auth:admin'], function(){
    Route::get('/admindashboard', [AdminController::class, 'tampilAdminDashboard'])->name('admindashboard.tampil');
    Route::get('/akunadmin', [AdminController::class, 'tampilAkunAdmin'])->name('akunadmin.tampil');
    Route::get('/updatelayanan', [LayananController::class, 'createLayanan'])->name('updatelayanan.halaman');
    Route::post('/updatelayanan', [LayananController::class, 'submitLayanan'])->name('updatelayanan.submit');
    Route::get('/adminlayanan', [LayananController::class, 'tampilLayanan'])->name('adminlayanan.tampil');
    Route::get('/riwayatpesanan', [PesananController::class, 'riwayatPesanan'])->name('riwayatpesanan.buka');
    Route::get('/pesananmasuk', [PesananController::class, 'tampilPesananMasuk'])->name('pesananmasuk.tampil');
    Route::post('/pesananmasuk/konfirmasi', [PesananController::class, 'konfirmasiPesananMasuk'])->name('konfirmasipesanan');
    Route::get('/admlayanandetail/{id_layanan}', [LayananController::class, 'detailLayanan'])->name('detaillayanan');
    Route::get('/edit/{id_layanan}', [LayananController::class, 'editLayanan'])->name('layanan.edit');
    Route::put('/ubah/{id_layanan}', [LayananController::class, 'update'])->name('editlayanan.update');
    Route::delete('/delete/{id_layanan}', [LayananController::class, 'hapus'])->name('hapus.layanan');
    Route::get('/infopesanan/{no_pesanan}', [PesananController::class, 'infoPesanan'])->name('infopesanan.tampil');
});

Route::group(['middleware'=>'auth:customer'], function(){
    Route::get('/dashboardcust', [LayananController::class, 'tampilLayanan'])->name('dashboardcust.tampil');
    Route::get('/akuncustomer', [CustomerController::class, 'tampilAkunCustomer'])->name('akuncustomer.tampil');
    Route::get('/checkoutcustomer/{id_layanan}', [LayananController::class, 'detailLayanan'])->name('checkoutcustomer');
    Route::get('/formcheckout/{id_layanan}', [PesananController::class, 'createPesanan'])->name('formcheckout.tampil');
    Route::post('/formcheckout', [PesananController::class, 'submitPesanan'])->name('formcheckout.submit');
    Route::get('/detailpesanancust/{id_layanan}/{no_pesanan}', [PesananController::class, 'detailPesanan'])->name('detailpesanan.tampil');
    Route::get('/paymentpage/{id_layanan}/{no_pesanan}', [PaymentController::class, 'payment'])->name('payment.tampil');
    Route::get('/uploadpayment/{id_layanan}/{no_pesanan}', [PaymentController::class, 'tampilUploadPayment'])->name('uploadpayment.tampil');
    Route::post('/uploadpayment/submit', [PesananController::class, 'submitBuktiPayment'])->name('uploadpayment.submit');
    Route::get('/pembayaranberhasil', [PesananController::class, 'displayPembayaranBerhasil'])->name('pembayaranberhasil');
    Route::get('/riwayatpesanancust', [PesananController::class, 'riwayatPesananCustomer'])->name('konfirmasiselesai.tampil');
    Route::post('/riwayatpesanancust/selesai', [PesananController::class, 'konfirmasiPesananSelesai'])->name('konfirmasiselesai.submit');
    Route::get('/detailpesananselesai/{no_pesanan}', [PesananController::class, 'detailPesananSelesai'])->name('pesananselesai.tampil');
    Route::get('/helpcenter', [CustomerController::class, 'HelpCenter'])->name('helpcenter.tampil');
    Route::get('/mulaidigicraft', [CustomerController::class, 'MulaiDigicraft'])->name('mulaidigicraft');
    Route::get('/caramemesan', [CustomerController::class, 'CaraMemesan'])->name('caramemesan');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
