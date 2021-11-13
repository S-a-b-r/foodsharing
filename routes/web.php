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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function(){
   Route::group(['namespace'=>'Main'], function (){
       Route::get('/','IndexController')->name('admin.index');
   }) ;

   Route::group(['namespace'=>'User', 'prefix'=>'users'], function(){
      Route::get('/','IndexController')->name('admin.users.index');
      Route::get('/create','CreateController')->name('admin.users.create');
      Route::post('/','StoreController')->name('admin.users.store');
      Route::get('/{user}','ShowController')->name('admin.users.show');
      Route::get('/{user}/edit','EditController')->name('admin.users.edit');
      Route::post('/{user}','UpdateController')->name('admin.users.update');
      Route::delete('/{user}','DeleteController')->name('admin.users.delete');
   });
});

//Route::group(['namespace'=>'Curator', 'prefix'=>'curator'], function(){
//   Route::group(['namespace'=>'Main'], function (){
//       Route::get('/','IndexController')->name('curator.index');
//   }) ;
//
//   Route::group(['namespace'=>'User', 'prefix'=>'users'], function(){
//      Route::get('/','IndexController')->name('curator.users.index');
//      Route::get('/create','CreateController')->name('curator.users.create');
//      Route::post('/','StoreController')->name('curator.users.store');
//      Route::get('/{user}','ShowController')->name('curator.users.show');
//      Route::get('/{user}/edit','EditController')->name('curator.users.edit');
//      Route::post('/{user}','UpdateController')->name('curator.users.update');
//      Route::delete('/{user}','DeleteController')->name('curator.users.delete');
//   });
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
