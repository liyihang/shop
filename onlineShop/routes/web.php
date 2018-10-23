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
Route::get('/admin', 'adminController@index')->name('admin.index');
Route::get('/admin/welcome', 'adminController@welcome')->name('admin.welcome');
Route::get('/admin/list', 'adminController@list')->name('admin.list');

Route::get('/goods', 'GoodsController@index')->name('goods.index');
Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/brand','BrandController@index')->name('brand.index');
Route::get('/attribute','AttrController@index')->name('attr.index');
Route::get('/number','NumberController@index')->name('number.index');