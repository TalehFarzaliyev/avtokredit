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



Route::get('/', 'HomeController@index')->name('home');
Route::get('bookmarks', 'HomeController@bookmarks')->name('bookmarks');
Route::get('search', 'HomeController@search')->name('search');
Route::get('get-car-models/{id}', 'HomeController@getCarModels')->name('autos/car-models');
//Route::get('/car_model_ajax', 'HomeController@ajax')->name('car_model_ajax');

Route::get('signin', 'Auth\CompanyLoginController@login')->name('signin');
Route::post('signin', 'Auth\CompanyLoginController@postLogin')->name('postLogin');

//Autos
Route::get('autos/add', 'AutoController@add')->name('autos/add');
Route::get('autos/success/{id}', 'AutoController@success')->name('autos/success');
Route::post('autos/store', 'AutoController@store')->name('autos.store');
Route::get('autos/get-car-models/{id}', 'AutoController@getCarModels')->name('autos/car-models');
Route::get('autos', 'AutoController@index')->name('autos');
Route::get('autos/search', 'AutoController@search')->name('search');
Route::post('autos/pond', 'AutoController@pond')->name('pond');
Route::get('autos/check/number', 'AutoController@checkNumber')->name('check-number');

Route::get('autos/view/{id}', 'AutoController@view')->name('auto.view');
Route::post('autos/{id}/expire', 'AutoController@expire')->name('auto.expire');
Route::get('autos/{id}/edit', 'AutoController@edit')->name('auto.edit');

Route::get('autos/add/bookmark/{id}', 'AutoController@addBookmark')->name('auto.addBookmark');
Route::get('autos/delete/bookmark/{id}', 'AutoController@deleteBookmark')->name('auto.deleteBookmark');

Route::get('page/{slug}', 'HomeController@page');

//Autosalon
Route::get('autosalon', 'AutosalonController@index')->name('autosalon');
Route::get('autosalon/{id}', 'AutosalonController@view')->name('autosalon.view');
Route::get('taxi', 'AutosalonController@taxi')->name('taxi');


Auth::routes();


//dashboard
Route::get('/admin', 'Admin\DashboardController@index')->name('dashboard');

Route::group(['as' => 'admin.','prefix' => 'admin', 'middleware' => 'auth','namespace' => 'Admin'],function (){


    Route::resource('user', 'UserController');
    Route::resource('currency', 'CurrencyController');
    Route::resource('language', 'LanguageController');
    Route::resource('car_brand', 'CarBrandController');
    Route::resource('car_model', 'CarModelController');
    Route::resource('car', 'CarController');
    Route::resource('role','RoleController');
    Route::get('/setting', 'SettingController@index')->name('setting');
    Route::post('/setting', 'SettingController@store')->name('setting');
    Route::resource('page', 'PageController');
    Route::resource('color', 'ColorController');
    Route::resource('fuel-type', 'FuelTypeController');
    Route::resource('body-type', 'BodyTypeController');
    Route::resource('gear', 'GearController');
    Route::resource('transmission', 'TransmissionController');
    Route::resource('city', 'CityController');
    Route::resource('company_group', 'CompanyGroupController');
    Route::resource('company', 'CompanyController');
    Route::resource('technical_specification', 'TechnicalSpecificationController');
    Route::get('/car_model_ajax', 'CarModelController@ajax')->name('car_model_ajax');
    Route::get('/car_image_delete', 'CarController@image_delete')->name('car_image_delete');


});
