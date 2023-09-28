<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScrapingController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/villages', [HomeController::class, 'villages']);
Route::get('/spins', [HomeController::class, 'spins']);
Route::get('/chests', [HomeController::class, 'chests']);
//Pl
Route::get('/pl', [HomeController::class, 'home_pl']);
Route::get('/pl/villages', [HomeController::class, 'villages_pl']);
Route::get('/pl/spins', [HomeController::class, 'spins_pl']);
Route::get('/pl/chests', [HomeController::class, 'chests_pl']);
//de
Route::get('/de', [HomeController::class, 'home_de']);
Route::get('/de/villages', [HomeController::class, 'villages_de']);
Route::get('/de/spins', [HomeController::class, 'spins_de']);
Route::get('/de/chests', [HomeController::class, 'chests_de']);
//ru
Route::get('/ru', [HomeController::class, 'home_rus']);
Route::get('/ru/villages', [HomeController::class, 'villages_rus']);
Route::get('/ru/spins', [HomeController::class, 'spins_rus']);
Route::get('/ru/chests', [HomeController::class, 'chests_rus']);
//es
Route::get('/es', [HomeController::class, 'home_es']);
Route::get('/es/villages', [HomeController::class, 'villages_es']);
Route::get('/es/spins', [HomeController::class, 'spins_es']);
Route::get('/es/chests', [HomeController::class, 'chests_es']);
//fr
Route::get('/fr', [HomeController::class, 'home_fr']);
Route::get('/fr/villagfr', [HomeController::class, 'villagfr_fr']);
Route::get('/fr/spins', [HomeController::class, 'spins_fr']);
Route::get('/fr/chests', [HomeController::class, 'chests_fr']);

Route::get('/privacy', function(){
    return view('privacy',['title'=>'Privacy policy', 'description'=>'Privacy policy']);
});




Route::get('/test', [ScrapingController::class, 'test']);
Route::get('/test2', [ScrapingController::class, 'test2']);
Route::get('/test3', [ScrapingController::class, 'test3']);
Route::get('/test4', [ScrapingController::class, 'test4']);



