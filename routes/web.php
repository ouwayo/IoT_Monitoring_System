<?php

use Illuminate\Support\Facades\Route;
// use App\Models\Role;

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
/* Old school method
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});
*/
Route::view('/', 'home');
Route::view('/contact', 'contact');

//Auth::routes();
//Route::view('/', 'welcome');
Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ANOTHER WAY
// Route::get('/home', 'HomeController@index')->name('home');

//Route::resource('/admin/users', 'App\Http\Controllers\Admin\UsersController',['except'=>['show','create','store']]);
// Applying middleware makes the entire group reply to changes:
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController',['except'=>['show','create','store']]);
});
Route::get('users', 'App\Http\Controllers\UserChartController@index');

