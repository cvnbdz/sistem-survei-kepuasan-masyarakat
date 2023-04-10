<?php

use Carbon\Carbon;
use App\Models\Kepuasan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeDashboard;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SaranController;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KepuasanController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\DataSurveyController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\OpsiJawabanController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\DetailStatistikController;
use App\Http\Controllers\StatistikSurveyController;

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


Route::resource('/', LandingController::class);

Route::resource('/biodata', BiodataController::class);
Route::post('/getkabupaten', [BiodataController::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [BiodataController::class, 'getkecamatan'])->name('getkecamatan');
Route::post('/getdesa', [BiodataController::class, 'getdesa'])->name('getdesa');

Route::get('/menu', function () {
    if (session()->missing('biodataID')) {
        return redirect('/biodata');
    } else {
        $getStatus = request()->session()->get('ikmStatus');
        return view('ikm.menu', compact('getStatus'));
    }
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/panel', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/panel', [LoginController::class, 'authenticate']);
Route::post('/panel/logout', [LoginController::class, 'logout']);


Route::put('users/{id}', function ($id) {
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/panel/dashboard/kuisioner', KuisionerController::class);
    Route::resource('/panel/dashboard/kategori', KategoriController::class);
    Route::resource('/panel/dashboard/pertanyaan', PertanyaanController::class);
    Route::resource('/panel/dashboard/pertanyaan/opsi', OpsiJawabanController::class);
    Route::get('/panel/dashboard', [StatistikController::class, "index"]);
    Route::get('/panel/dashboard/statistik', [StatistikController::class, "statistik"]);
    Route::get('/panel/dashboard/statistik/mingguan', [StatistikController::class, "weeklyStat"]);
    Route::resource('/panel/dashboard/datasurvey', DataSurveyController::class);
    // Route::resource('/panel/dashboard/cetak/home', CetakController::class);
    Route::get('/panel/dashboard/cetak/home', [CetakController::class, "cetakHome"]);
    Route::get('/panel/dashboard/cetak/harian', [CetakController::class, "cetakHarian"]);
    Route::get('/panel/dashboard/cetak/mingguan', [CetakController::class, "cetakMingguan"]);
    Route::get('/panel/dashboard/cetak/bulanan', [CetakController::class, "cetakBulanan"]);
    Route::get('/panel/dashboard/cetak/tahunan', [CetakController::class, "cetakTahunan"]);
    Route::resource('/panel/dashboard/statistik-survey', StatistikSurveyController::class);
    Route::resource('/panel/dashboard/cetak', CetakController::class);
});

// Route::get('/panel/dashboard/cetak', function () {
//     return view('admin.cetak');
// })->middleware('auth');

// Route::get('/panel/dashboard/datasurvey', function () {
//     return view('admin.survey.datasurvey');
// })->middleware('auth');

Route::get('/panel/dashboard/profil', function () {
    return view('admin.profile.profil');
})->middleware('auth');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/kepuasan', KepuasanController::class);
Route::resource('/kepuasan/polling', PollingController::class);

Route::resource('/survey', SurveyController::class);

Route::resource('/saran', SaranController::class);

Route::resource('/panel/dashboard/detail', DetailStatistikController::class);

Route::get('/exit', function () {
    if (session()->has('biodataID')) {
        session()->pull('biodataID');
        session()->pull('ikmStatus');
    }
    return redirect('/');
});
