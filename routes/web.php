<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ArticleController;


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

// Route::group(['prefix' => 'article', 'as' => 'article.'], function () {
//     Route::get('/', ['as' => "index", 'uses' => "ArticleController@index"]);
// });


// Route::get('/', function () {
//     return view('Web/Article/Index');
// });

Auth::routes();

Route::resource('/', ArticleController::class);

Route::get('/Index', [ArticleController::class, 'index'])->name('/Index');
Route::get('/Create', [ArticleController::class, 'create'])->name('/Create');
Route::get('/Edit/{id}', [ArticleController::class, 'edit'])->name('/Edit');
Route::put('/Update/{id}', [ArticleController::class, 'update'])->name('Update');
Route::delete('/Delete/{id}', [ArticleController::class, 'destroy'])->name('Delete');







