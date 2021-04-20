<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Form;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MailController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;



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
Route::get('/', function(){
    return redirect(app()->getLocale());
}); 

Route::group([
    'prefix' => '{locale}', 
    'where' => ['locale' => '[a-zA-z]{2}'],
    'middleware' => 'setlocale',
], function() {

    Auth::routes();

    Route::get('/', function () {
        // return view('welcome');
        return view('welcome');
    });

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/career', function () {
        return view('career');
    });

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
Route::get('form/{id}', [UploadController::class, 'details']);

//mail
// Route::get('/send', [MailController::class, 'send'])->name('send');
Route::get('/send', [MailController::class, 'view']);
Route::post('/send', [MailController::class, 'store']);

//localization
Route::get('/{lang}', function($lang) {
    App::setlocale($lang);
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
