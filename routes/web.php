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

    Route::group(['namespace'=>'Shop', 'prefix'=>'shops'], function(){
      Route::get('/','IndexController')->name('admin.shops.index');
      Route::get('/create','CreateController')->name('admin.shops.create');
      Route::post('/','StoreController')->name('admin.shops.store');
      Route::get('/{shop}','ShowController')->name('admin.shops.show');
      Route::get('/{shop}/edit','EditController')->name('admin.shops.edit');
      Route::patch('/{shop}','UpdateController')->name('admin.shops.update');
      Route::delete('/{shop}','DeleteController')->name('admin.shops.delete');
   });

   Route::group(['namespace'=>'Delivery', 'prefix'=>'deliveries'], function(){
      Route::get('/','IndexController')->name('admin.deliveries.index');
      Route::get('/create','CreateController')->name('admin.deliveries.create');
      Route::get('/{delivery}/product','ProductController')->name('admin.deliveries.product');
      Route::post('/{delivery}/add','AddProductController')->name('admin.deliveries.addProduct');
      Route::post('/','StoreController')->name('admin.deliveries.store');
      Route::get('/{delivery}','ShowController')->name('admin.deliveries.show');
      Route::get('/{delivery}/edit','EditController')->name('admin.deliveries.edit');
      Route::post('/{delivery}','UpdateController')->name('admin.deliveries.update');
      Route::delete('/{delivery}','DeleteController')->name('admin.deliveries.delete');
   });

    Route::group(['namespace'=>'Act', 'prefix'=>'acts'], function(){
        Route::get('/','IndexController')->name('admin.acts.index');
        Route::get('/create','CreateController')->name('admin.acts.create');
        Route::post('/','StoreController')->name('admin.acts.store');
        Route::get('/{act}','ShowController')->name('admin.acts.show');
        Route::get('/{act}/edit','EditController')->name('admin.acts.edit');
        Route::post('/{act}','UpdateController')->name('admin.acts.update');
        Route::delete('/{act}','DeleteController')->name('admin.acts.delete');
    });
    Route::group(['namespace'=>'Group', 'prefix'=>'groups'], function(){
        Route::get('/','IndexController')->name('admin.groups.index');
        Route::get('{group}/add/volunteer','VolunteerController')->name('admin.groups.volunteer');
        Route::post('{group}/add/volunteer}','AddVolunteerController')->name('admin.groups.addVolunteer');
        Route::get('/create','CreateController')->name('admin.groups.create');
        Route::post('/','StoreController')->name('admin.groups.store');
        Route::get('/{group}','ShowController')->name('admin.groups.show');
        Route::get('/{group}/edit','EditController')->name('admin.groups.edit');
        Route::get('/{group}/schedules','SchedulesController')->name('admin.groups.schedules');
        Route::post('/{group}','UpdateController')->name('admin.groups.update');
        Route::delete('/{group}','DeleteController')->name('admin.groups.delete');
    });

    Route::group(['namespace'=>'Study', 'prefix'=>'study'], function(){
        Route::get('/','IndexController')->name('admin.study.index');

    });
});

Route::group(['namespace'=>'Volunteer', 'prefix'=>'volunteer'], function(){

    Route::group(['namespace'=>'Main'], function (){
       Route::get('/','IndexController')->name('volunteer.index');
    }) ;

   Route::group(['namespace'=>'Delivery', 'prefix'=>'deliveries'], function(){
      Route::get('/','IndexController')->name('volunteer.deliveries.index');
      Route::post('/{delivery}/confirm', 'ConfirmController')->name('volunteer.deliveries.confirm');
       Route::get('/{delivery}/product','ProductController')->name('volunteer.deliveries.product');
       Route::post('/{delivery}/add','AddProductController')->name('volunteer.deliveries.addProduct');
      Route::get('/create','CreateController')->name('volunteer.deliveries.create');
      Route::post('/','StoreController')->name('volunteer.deliveries.store');
      Route::get('/{delivery}','ShowController')->name('volunteer.deliveries.show');
      Route::delete('/{delivery}','DeleteController')->name('volunteer.deliveries.delete');
   });

    Route::group(['namespace'=>'Act', 'prefix'=>'acts'], function(){
        Route::get('/','IndexController')->name('volunteer.acts.index');
        Route::get('/create','CreateController')->name('volunteer.acts.create');
        Route::post('/','StoreController')->name('volunteer.acts.store');
        Route::get('/{act}','ShowController')->name('volunteer.acts.show');
    });
    Route::group(['namespace'=>'Group', 'prefix'=>'groups'], function(){
        Route::get('/','IndexController')->name('volunteer.groups.index');
        Route::get('/{group}/schedules','SchedulesController')->name('volunteer.groups.schedules');
    });

    Route::group(['namespace'=>'Study', 'prefix'=>'study'], function(){
        Route::get('/','IndexController')->name('volunteer.study.index');

    });
});
Route::group(['namespace'=>'Seller', 'prefix'=>'seller'], function(){
   Route::group(['namespace'=>'Delivery', 'prefix'=>'deliveries'], function(){
      Route::get('/','IndexController')->name('seller.deliveries.index');
      Route::post('/{delivery}/confirm', 'ConfirmController')->name('seller.deliveries.confirm');
      Route::get('/{delivery}','ShowController')->name('seller.deliveries.show');
   });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
