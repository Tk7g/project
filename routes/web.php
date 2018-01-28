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
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
  Route::view('admin/admin', 'admin.admin');
  Route::get('/users', function (){
  	$users = \App\User::orderby('created_at', 'desc')->get();
  		return view('users', [
  			'users' => $users,
  		]);
  });
});