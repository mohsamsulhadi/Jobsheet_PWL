<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;


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

//Route::get('/hello', function () {
// return 'Hello World';
//});

Route::get('/world', function () {
return 'World';
});

// Route::get('/', function () {
// return 'Selamat Datang';
// });
 
Route::get('/about', function () {
return '2141762133 - Moh. Samsul Hadi';
});

Route::get('/user/{Samsul}', function ($Samsul) {
return 'Nama saya '.$Samsul;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/pages/{page}/articles/{article}', function
($pageId, $articleId) {
 return 'Halaman Artikel'.$pageId." ID: ".$articleId;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya'.$name;
});

Route::get('/user/{name?}', function ($name='Samsul') {
    return 'Nama saya '.$name;
    });

    Route::get('/hello', [WelcomeController::class,'hello']);
    Route::get('/', [PageController::class,'index']);
    Route::get('/about', [PageController::class,'about']);
    Route::get('/articles/{id}', [PageController::class,'articles']);
    Route::resource('photos', PhotoController::class);

    // Route::get('/greeting', function () {
        // return view('blog.hello', ['name' => 'Samsul']);
        // });
        Route::get('/greeting', [WelcomeController::class,
        'greeting']);
           