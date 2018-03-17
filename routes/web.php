<?php

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
/*
Route::get('/', function () {
    // 你可以在应用程序的任何位置使用全局 config 函数来访问配置值。配置值的访问可以使用「点」语法，这其中包含了要访问的 文件名称 和 选项 的名称。还可以指定默认值，如果配置选项不存在，则返回默认值：
// config(['app.timezone' => 'America/Chicago']);运行时
    // return $value = config('app.timezone');
    return view('welcome');
});
*/
Route::get('/','PagesController@root')->name('root');
