<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return 'ini laravel saya';
});

Route::get('angka/{nilai}', function ($nilai) {
    return 'nilai saya adalah : '.  $nilai;
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil penjumlahan : '. $nilai1 + $nilai2;
});
Route::get('perkalian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil perkalian : '. $nilai1 * $nilai2;
});
Route::get('pembagian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil pembagian : '. $nilai1 / $nilai2;
});
Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'hasil pengurangan : '. $nilai1 - $nilai2;
});

Route::get('coba', function () {
    return view('coba');
});

// Route::get('users/{id}', function () {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('tabel', function () {
    $data = ['meja', 'kursi', 'pensil', 'bolpoin', 'lampu'];
    // return view('table', ['data' => $data]);
    return view('table', compact('data'));
});

Route::get('template', function () {
    return view('templatekasper');
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('tambahsiswa', [SiswaController::class, 'show']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
