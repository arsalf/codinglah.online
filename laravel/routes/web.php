<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ManagerKarya;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManagerArtikel;
use App\Http\Controllers\ManagerBelajar;
use App\Http\Controllers\ManagerProla;
use App\Http\Controllers\ManagerTantangan;
use App\Http\Controllers\ManagerTutorial;

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

/*
    AUTH REQUIRE ROUTE
*/
Auth::routes();

/*
    DEFAULT INDEX WEB ROUTE
*/
Route::get('/', function () {
    return view('index');
});

/*
    ADMIN ROUTE
*/
#show home dashboard
Route::get('/dashboard', [HomeController::class, 'index']);

#show data programming language manager
Route::get('/manager/data/prola', [ManagerProla::class, 'index']);
Route::post('/manager/data/prola/create', [ManagerProla::class, 'prola_create']);
Route::post('/manager/data/prola/update', [ManagerProla::class, 'prola_update']);
Route::post('/manager/data/prola/delete', [ManagerProla::class, 'prola_delete']);

#show page tutorial manager
Route::get('/manager/page/tutorial', [ManagerTutorial::class, 'index']);
Route::post('/manager/page/tutorial/create', [ManagerTutorial::class, 'tutorial_create']);
Route::post('/manager/page/tutorial/update', [ManagerTutorial::class, 'tutorial_update']);
Route::post('/manager/page/tutorial/delete', [ManagerTutorial::class, 'tutorial_delete']);

#show page tantangan manager
Route::get('/manager/page/tantangan', [ManagerTantangan::class, 'index']);
Route::post('/manager/page/tantangan/create', [ManagerTantangan::class, 'tantangan_create']);
Route::post('/manager/page/tantangan/update', [ManagerTantangan::class, 'tantangan_update']);
Route::post('/manager/page/tantangan/delete', [ManagerTantangan::class, 'tantangan_delete']);

#show page belajar manager
Route::get('/manager/page/belajar', [ManagerBelajar::class, 'index']);
Route::post('/manager/page/belajar/create', [ManagerBelajar::class, 'belajar_create']);
Route::post('/manager/page/belajar/update', [ManagerBelajar::class, 'belajar_update']);
Route::post('/manager/page/belajar/delete', [ManagerBelajar::class, 'belajar_delete']);

#show page artikel manager
Route::get('/manager/page/artikel', [ManagerArtikel::class, 'index']);
Route::post('/manager/page/artikel/create', [ManagerArtikel::class, 'artikel_create']);
Route::post('/manager/page/artikel/update', [ManagerArtikel::class, 'artikel_update']);
Route::post('/manager/page/artikel/delete', [ManagerArtikel::class, 'artikel_delete']);

#show page karya manager
Route::get('/manager/page/karya', [ManagerKarya::class, 'index']);
Route::post('/manager/page/karya/create', [ManagerKarya::class, 'karya_create']);
Route::post('/manager/page/karya/update', [ManagerKarya::class, 'karya_update']);
Route::post('/manager/page/karya/delete', [ManagerKarya::class, 'karya_delete']);

/*
    CUSTOMER ROUTE
*/
#show artikel page
Route::get('/artikel', [NavController::class, 'artikel']);

#show tutorial page
Route::get('/tutorial', [NavController::class, 'tutorial']);
Route::get('/tutorial/laravel/install_laravel', [NavController::class, 'install_laravel']);

#show tantangan page
Route::get('/tantangan', [NavController::class, 'tantangan']);

#show karya page
Route::get('/karya', [NavController::class, 'karya']);
Route::get('/karya/alat', [NavController::class, 'karya_alat']);
Route::get('/karya/games', [NavController::class, 'karya_games']);

#show belajar page
Route::get('/belajar', [NavController::class, 'belajar']);
Route::get('/belajar/c/intro', [NavController::class, 'belajar_c']);

/*
    Not Found Page <=> COMING SOON
*/
Route::get('/coming_soon', [NavController::class, 'coming_soon']);

