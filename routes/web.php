<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BlogController::class, 'index']);
Route::get('/about',[BlogController::class, 'about']);
Route::get('/blog',[BlogController::class, 'Blog_konten']);
Route::get('read/{title_lain}', [BlogController::class, 'tampil']);
