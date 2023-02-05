<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
    GET
    POST
    PUT
    PATCH
    DELETE
    OPTIONS
*/

Route::get('/', [PageController::class, 'home']);

Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/blog', [PageController::class, 'blog']);
Route::get('/portfolio', [PageController::class, 'portfolio']);
Route::get('/admin', [UsersController::class, 'index']);





//====== blog routes ======\\
// Route::get('/blog', [PostsController::class, 'index']);
// Route::get('/blog/{$id}', [PostsController::class, 'show']);

// Route::get('/blog/create', [PostsController::class, 'edit']);
// Route::post('/blog', [PostsController::class, 'store']);

// Route::get('/blog/edit/{$id}', [PostsController::class, 'edit']);
// Route::patch('/blog/{$id}', [PostsController::class, 'update']);

// Route::delete('/blog/{$id}', [PostsController::class, 'destroy']);

// Route::get('/blog', [PostsController::class, 'index']);
// Route::resource('blog', PostsController::class);



Route::get('/blog/{id}', function ($id) {
    return view('blog');
});
Route::post('/blog/{id}', function ($id) {
    return view('blog');
});


Route::get('/portfolio', function () {
    return view('portfolio');
});



Route::get('/portfolio/{id}', function ($id) {
    // $res = response('Post', $id);
    
    return response('Post'.  $id);
});
Route::get('/search', function (Request $request) {

    return view('portfolio', $data);
});
