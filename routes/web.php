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


Route::resource('/subcategory-liste', App\Http\Controllers\SubCategoryController::class);
Route::resource('/category-liste', App\Http\Controllers\CategoryController::class);
Route::resource('/service-liste', App\Http\Controllers\ServiceController::class);

Route::resource('/user-liste', App\Http\Controllers\user_simpleController::class);
Route::resource('/handyman-liste', App\Http\Controllers\HandymanController::class);
Route::resource('/provider-liste', App\Http\Controllers\ProviderController::class);


Route::get('provider-create', 'App\Http\Controllers\ProviderController@create');
Route::get('user-create', 'App\Http\Controllers\user_simpleController@create');
Route::get('handyman-create', 'App\Http\Controllers\HandymanController@create');

Route::get('subcategory-create', 'App\Http\Controllers\SubCategoryController@create');
Route::get('category-create', 'App\Http\Controllers\CategoryController@create');
Route::get('service-create', 'App\Http\Controllers\ServiceController@create');


Route::get('user-profile', \App\Http\Livewire\User\UserProfileComponent::class);


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::post('my-profile-update', 'App\Http\Controllers\UserController@profile_update');

Route::group(['middleware' => ['auth', 'isBan']], function () {

    Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');

});
Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');

    });
});


Route::group(['middleware' => ['auth', 'isUser']], function () {
    Route::get('/user', function () {
        return view('home');
    });
});

Route::group(['middleware' => ['auth', 'isProvider']], function () {
    Route::get("/provider", [App\Http\Controllers\Admin\providerController::class, 'index']);
});


Route::group(['middleware' => ['auth', 'isHandyman']], function () {
    Route::get('/handyman', function () {
        return view('home');
    });
});


//Route::get("/home", [App\Http\Controllers\HomeController::class, 'index']);
Route::get("/dashboard", [App\Http\Controllers\Admin\DashboardController::class, 'index']);



