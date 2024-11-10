<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dokumen', function () {
    return view('dokumen.index');
});

Route::get('/akreditasi', function () {
    return view('akreditasi.index');
});

Route::get('/visimisi', function () {
    return view('visimisi.index');
});

Route::get('/profilprodi', function () {
    return view('profilprodi.index');
});

Route::get('/dokumenkurikulum', function () {
    return view('dokumenkurikulum.index');
});

Route::get('/sop', function () {
    return view('sop.index');
});

Route::get('/tenagaahli', function () {
    return view('tenagaahli.index');
});

Route::get('/sop', function () {
    return view('sop.index');
});

Route::get('/tenagaahli', function () {
    return view('tenagaahli.index');
});

Route::get('/koleksijurnal', function () {
    return view('koleksijurnal.index');
});

// Route::get('/home', function () {
//     return view('admin.home',['halaman'=> 'admin baru'] );
// });
// Route::get('/gallery', function () {
//     return view('gallery.gallery');
// });
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

route::get("/", [ProdukController::class, 'index'])->name('index.index');