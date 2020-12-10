<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AjaxUploadController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/' , [PostsController::class, 'index2']);


Route::get('/explorer' , [PostsController::class, 'index']);
Route::get('/explorer/action' , [PostsController::class, 'action'])->name('live_search.action');

Route::get('/{name}/listen' , [PostsController::class, 'listen'])->name('post.listen');
Route::post('/{name}/listen/fav' , [PostsController::class, 'update'])->name('post.fav');

Route::post('/ajax-image-upload',[AjaxUploadController::class, 'store'])->name('image.ajax.store');
