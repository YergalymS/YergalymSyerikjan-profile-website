<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Form;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;

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

Route::get('/', function () {
    // return view('welcome');
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/post/create', function () {
    DB::table('post')->insert([
        'title' => 'Portfolia',
        'body' => 'About me'
    ]);
});
Route::get('/post', function() {
    $post = Post::find(1);
    return $post;    
});

Route::get('blog/index', [BlogController::class, 'index' ]);

Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])->name('add-post');

//search by id
Route::get('post/{id}', [BlogController::class, 'get_post']);


//upload form
Route::post('form/upload', [UploadController::class, 'uploadsubmit'])->name('add-form');
Route::get('form/upload', [UploadController::class,'uploadform']);
Route::get('form/index', [UploadController::class, 'index' ]);

//mail
Route::get('/send', [MailController::class, 'send']);



