<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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

use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);

//Route::get('/', [HomeController::class, 'index']);
//Practicum 1 :
//number 1.
//Route::get('/contact', function () {return view('contact'); })->name('contact');
//Route::get('/gallery', function () {return view('gallery'); })->name('gallery');
//number 2.
//Route::get('/', function () {
  ////  echo "Welcome";
//});
//number 3.
//Route::get('/about', function () {
    //echo "Name: Della Arselatuiqrom NIM: 1941720027 Class: TI-2H";
//});

//Route::get('/article/{id}', function ($id) {
   // echo ("This is article with id ".$id);
//});

//Practicum 2 :
//number 2.
//Route::get('/', [PageController::class, 'index']);

//Route::get('/about', [PageController::class, 'about']);

//Route::get('articles/{id}', [PageController::class, 'articles']);

//number 3.
//oute::get('/about', [AboutController::class, 'about']);

//Route::get('articles/{id}', [ArticleController::class, 'articles']);

//Practicum 3

//Route::get('/', function () {return view('index');});
//Route::get('/blog', function () {return view('blog'); })->name('blog');
//Route::get('/columns', function () {return view('columns'); })->name('columns');
//Route::get('/contact', function () {return view('contact'); })->name('contact');
//Route::get('/ei-slider', function () {return view('ei-slider'); })->name('ei-slider');
//Route::get('/elements', function () {return view('elements'); })->name('elements');
//Route::get('/full-width', function () {return view('full-width'); })->name('full-width');
//Route::get('/fullscreen-gallery', function () {return view('fullscreen-gallery'); })->name('fullscreen-gallery');
//Route::get('/gallery-fader', function () {return view('gallery-fader'); })->name('gallery-fader');
///Route::get('/gallery-simple', function () {return view('gallery-simple'); })->name('gallery-simple');
//Route::get('/home', function () {return view('home'); })->name('home');
///Route::get('/image-frontpage', function () {return view('image-frontpage'); })->name('image-frontpage');
//Route::get('/index', function () {return view('index'); })->name('index');
///Route::get('/magazine', function () {return view('magazine'); })->name('magazine');
//Route::get('/nivo', function () {return view('nivo'); })->name('nivo');
//Route::get('/photogrid', function () {return view('photogrid'); })->name('photogrid');
//Route::get('/portfolio', function () {return view('portfolio'); })->name('portfolio');
///Route::get('/video', function () {return view('video'); })->name('video');
//Route::get('/welcome', function () {return view('welcome'); })->name('welcome');

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
