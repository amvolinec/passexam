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


Route::get('/', 'StartController')->name('start');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/exam', 'ExamController')->middleware('auth')->name('exam');

Route::view('/welcome', 'welcome');

Route::resource('/admin/users', 'UserController', [
    'as' => 'admin'
])->middleware('auth');

Route::match(['get, post'], '/testing', function () {
    return view('welcome');
});

Route::get('/user/{id?}', function ($id = null) {
    if (!is_null($id)) {
        return 'User: ' . $id;
    }

    return 'No user id found';
});
