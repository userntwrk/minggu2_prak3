<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;

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

Route::resource('/home', HomeController::class);

Route::prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika', [StudiController::class, 'mi']);
    Route::get('/teknik-informatika', [StudiController::class, 'ti']);
});

Route::get('/news/{id}', [ArticleController::class, 'index']);

Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran', [SaranaController::class, 'kantor']);
    Route::get('/laboratorium', [SaranaController::class, 'lab']);
    Route::get('/kelas', [SaranaController::class, 'kelas']);
    Route::get('/lainnya', [SaranaController::class, 'dll']);
});

Route::resource('/about', AboutController::class);

Route::get('/comment/{nama}/{pesan}', [CommentController::class, 'index']);
