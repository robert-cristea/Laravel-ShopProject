<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();



Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('homepage')->middleware('auth');
Route::get('/mentions', 'HomeController@mentions')->name('mentions');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/cgv', 'HomeController@cgv')->name('cgv');
Route::get('/contact', 'HomeController@contact')->name('contact')->middleware('auth');
Route::get('/about', 'HomeController@about')->name('about');



Route::get('/part', 'PartController@index')->name('part');
Route::get('/part/{joinery}', 'PartController@joinery')->name('part-joinery');
Route::post('/part-summary', 'PartController@summary')->name('part-summary');
Route::post('/part-order-add', 'PartController@recordorder')->name('part-order-add');

Route::get('/part-account', 'PartController@account')->name('part-account');
Route::get('/part-projects', 'PartController@projects')->name('part-projects');
Route::get('/part-history', 'PartController@history')->name('part-history');
Route::get('/part-info', 'PartController@info')->name('part-info');
Route::post('/part-info-save', 'PartController@modifyinfo')->name('part-info-save');

Route::get('/part-order/{id}', 'PartController@modifyorder')->name('part-order')->middleware('order');
Route::post('/part-order-save', 'PartController@updateorder')->name('part-order-save');
Route::get('/part-order-delete/{id}', 'PartController@deleteorder')->name('part-order-delete')->middleware('order');

Route::post('/part-clicandpay', 'PartController@clicandpay')->name('part-clicandpay');
Route::post('/part-clicandpay-summary', 'PartController@pay')->name('part-clicandpay-summary');



Route::get('/pro', 'ProController@index')->name('pro');
Route::get('/pro/{id}', 'ProController@index')->name('pro-id')->middleware('project');
Route::get('/pro-with-joinery/{id}', 'ProController@joinery')->name('pro-with-joinery');
Route::post('/pro-order-add', 'ProController@recordorder')->name('pro-order-add');

Route::get('/pro-account', 'ProController@account')->name('pro-account');
Route::get('/pro-projects', 'ProController@projects')->name('pro-projects');
Route::get('/pro-history', 'ProController@history')->name('pro-history');
Route::get('/pro-info', 'ProController@info')->name('pro-info');
Route::post('/pro-info-save', 'ProController@modifyinfo')->name('pro-info-save');

Route::get('/pro-projects/{id}', 'ProController@projects')->name('pro-projects-id')->middleware('project');
Route::post('/pro-project-add', 'ProController@createproject')->name('pro-project-add');
Route::get('/pro-project-delete/{id}', 'ProController@deleteproject')->name('pro-project-delete')->middleware('project');

Route::get('/pro-order/{id}', 'ProController@modifyorder')->name('pro-order')->middleware('order');
Route::post('/pro-order-save', 'ProController@updateorder')->name('pro-order-save');
Route::get('/pro-order-delete/{id}', 'ProController@deleteorder')->name('pro-order-delete')->middleware('order');

Route::post('/pro-clicandpay', 'ProController@clicandpay')->name('pro-clicandpay');
Route::post('/pro-clicandpay-summary', 'ProController@pay')->name('pro-clicandpay-summary');

Route::post('/quote', 'ProController@downloadQuote')->name('quote');



Route::post('/mailsend', 'HomeController@email')->middleware('auth');
















