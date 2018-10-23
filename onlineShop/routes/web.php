<?php
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
//     return view('user.index');
// });
Route::get('/number', 'NumberController@index')->name('number.index');
Route::get('/goods', 'GoodsController@index')->name('goods.index');
Route::get('/category', 'CategoryController@index')->name('category.index');