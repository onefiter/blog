<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {

    return view('welcome');
});

Route::get('/test', function () {

    return view('welcome');
});

/*6.路由分组:解决有共同前缀和命名空间的问题,可以用路由分组功能
 * */
//1)原先的方式
/*
Route::get('admin/login', 'Admin\IndexController@login');

Route::get('admin/index', 'Admin\IndexController@index');
*/
//2)路由分组的方式
Route::group(['prefix'=> 'admin','namespace'=>'Admin'], function(){
    Route::get('login', 'IndexController@login');

    Route::get('index', 'IndexController@index');
    //资源路由
    Route::resource('article','ArticleController');
});
//3)子域名路由分组
/*5.路由命名
 * */
/*
//Route::get('test', 'Admin\IndexController@index');

//Route::get('user', ['as'=>'profile',function(){
//
//    echo route('profile');//http://blog.hd/user
//
//}]);

//Route::get('test', ['as'=>'profile','uses'=>'Admin\IndexController@index']);
//这种命名路由比较直观
Route::get('test', 'Admin\IndexController@index')->name('profile');
*/
/*
 *4.参数约束
 */
/*
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
})->where('id','[0-9]+');
*/


/**
 * 3.可选参数
 */
/*
Route::get('user/{id?}', function ($id = 0) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment?}', function ($postId, $commentId=null) {

    return $postId."-----".$commentId;
});
*/
/**
 * 2.必选参数
 */
/**
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {

    return $commentId;
});
 */


/*1.基本路由的练习
 * */

/*


Route::get('/hd', function () {

    return  "get";
});

Route::post('/hd', function () {

    return  "post";
});

Route::put('/hd', function () {

    return  "put";
});

Route::delete('/hd', function () {

    return  "delete";
});

Route::patch('/hd', function () {

    return  "patch";
});

Route::options('/hd', function () {

    return  "options";
});

Route::match(['get','post'],'/test',function(){
    echo "match";
});

Route::any('foo',function(){
    echo "foo";
});

*/
