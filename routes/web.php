<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioSimple;
//use App\Http\Controllers\PortfolioController;
//use App\Http\Controllers\PortfolioApi;
//use App\Http\Controllers\Portfolio;

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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', [PortfolioSimple::class, 'show'])->name('portfolio');
//Route::view('/portfolio', 'PortfolioSimple@index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

//metodo invoke php artisan make:controller invoke
//Route::get('/portfolio', PortfolioController::class)->name('portfolio');
//Route::get('/portfolio', [Portfolio::class, 'index'])->name('portfolio');


// Route::get('/', function () {
//     return view('home');
// })->name('home');

//rutas con parametros
/*Route::get('saludo/{nombre?}', function ($nombre = 'invitado') {
  return 'hola ' . $nombre;
});
*/

//Route::resource('projects', Portfolio::class);
//Route::apiResource('projects', PortfolioApi::class);
