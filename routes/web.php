<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('/posts',[PostController::class,"index"] ) ->name(name:"posts.index");

Route::get("/posts/create",[PostController::class,"create"])->name(name:"posts.create");

Route::post("/posts",[PostController::class,"store"])->name(name:"posts.store");
 
Route::get("/posts/archive",[PostController::class,"archive"])->name(name:"posts.archive");

Route::get("/posts/{postid}",[PostController::class,"destroy"])->name(name:"posts.destroy")->withTrashed();

Route::get("/post/{postid}/restore",[PostController::class,"restore"])->name(name:"posts.restore")->withTrashed();

Route::get("/posts/{comment}/edit",[PostController::class,"edit"])->name(name:"posts.edit");

Route::put("/posts/{comment}",[PostController::class,"update"])->name(name:"posts.update");


Route::get ('/show/{postid}',[PostController::class,"show"])->name(name:"posts.show") ;







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
