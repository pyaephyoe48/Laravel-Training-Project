<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Article\ArticleController;

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

Route::get('/newarticles', [ArticleController::class, 'index']); 

Route::get('/articles/detail/{id}', [ ArticleController::class, 'detail' ]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\Controller@index');

Route::get('/articles', function () {
    return 'Article List';
});

Route::get('/articles/detail', function () {
    return 'Article Detail';
})->name('article.detail');

Route::get('/articles/detail/{id}', function ( $id ) { 
   return "Article Detail - $id"; 
});

Route::get('/articles/more', function() { 
	return redirect()->route('article.detail'); 
});

