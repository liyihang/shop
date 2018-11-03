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
Route::namespace('Admin')
        ->group(function(){
            Route::get('/admin', 'AdminController@index')->name('admin.index');
            Route::get('/admin/welcome', 'AdminController@welcome')->name('admin.welcome');
            Route::get('/admin/list', 'AdminController@list')->name('admin.list');

            Route::get('/admin/goods', 'GoodsController@index')->name('goods.index');
            Route::get('/category', 'CategoryController@index')->name('category.index');
            Route::get('/brand','BrandController@index')->name('brand.index');
            Route::get('/attribute','AttrController@index')->name('attr.index');
            Route::get('/number','NumberController@index')->name('number.index');
        });

// 后台首页路由
Route::get('/', function () {
    return "<img src='https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1541160398028&di=276b2ce07c813237f8f856cd12c0fdb9&imgtype=0&src=http%3A%2F%2Ff.cdn.xsteach.cn%2Fuploaded%2Fd8%2Ff8%2F16%2Fd8f816bfef5249511468870723516e12003.gif'>";
});

Route::get('/mail','MailController@test');
