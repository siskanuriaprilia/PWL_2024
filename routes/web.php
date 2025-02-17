<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

//langkah prak 1
Route::get('/hello', [WelcomeController::class, 'hello']);


Route::get('/world', function () {
    return 'World';
 });


 Route::get('/', [HomeController::class, 'index']);

 Route::get('/about', [AboutController::class, 'about']);
//langkah prak 2

 
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});
    
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});


Route::get('/articles/{id}', [ArticleController::class, 'articles']);



//langkah prak 3
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

    
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});





 