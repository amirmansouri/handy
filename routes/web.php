<?php

use App\Http\Controllers\ContactController;
use App\Http\Livewire\CategorieComponent;
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


Route::resource('/provider', App\Http\Controllers\ProviderController::class);
Route::resource('/subcategory', App\Http\Controllers\SubCategoryController::class);
Route::resource('/category', App\Http\Controllers\CategoryController::class);
Route::resource('/service', App\Http\Controllers\ServiceController::class);
Route::resource('/user', \App\Http\Controllers\Auth\UserMan\user::class);
//Route::get('user-register','App\Http\Controllers\Admin\RegisteredController@index');


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/amir', function (){
//   return view('provider.create') ;
//});
Route::group(['middleware'=>['auth','isAdmin']],function (){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

});




