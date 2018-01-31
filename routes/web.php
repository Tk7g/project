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




Route::group(['middleware' => ['auth']], function() {
  Route::get('/logout', 'Auth\LoginController@logout');
  Route::get('/home', 'HomeController@index')->name('home');
  Route::resource('users', 'UserController');

   // Route::get('/users/edit/{id}', function ($id) {
   //      if (\Gate::allows('admin-access')) {
   //          return 'Access granted';
   //      }
   //      return 'Access denied - User zasah erhgui';
   //  });
  Route::resource('product', 'ProductController');
   // Route::get('/register', function () {
   //  return view('register');
   // });

});

// Route::group(['middleware' => ['auth'], ['prefix' => 'admin'], function (){
//   Route::get('admin/admin', ['as' => 'admin', function () {
//     return view('admin.admin');
//   }]);
// }]);