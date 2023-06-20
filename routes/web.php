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


Route::get('/f', function () {
    return view('admin.mihmanlist');
})->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@dash')->middleware('auth');
/*mihman*/
Route::post('/mihmansabt', 'MihmanController@new')->middleware('auth');
Route::get('/mihmanlist', 'MihmanController@list')->middleware('auth');
Route::get('/mihmaned/{id}', 'MihmanController@read')->middleware('auth');
Route::post('/mihmanedi', 'MihmanController@up')->middleware('auth');
Route::get('/mihmanlist2', 'MihmanController@list2')->middleware('auth');
Route::get('/mihmanlistneg', 'MihmanController@list3')->middleware('negahban');
Route::post('/mihmanup1', 'MihmanController@up1')->middleware('negahban');
Route::post('/mihmanup2', 'MihmanController@up2')->middleware('negahban');
Route::get('/mihmanajax', 'MihmanController@list4')->middleware('negahban');
/*tablo elanat*/
Route::get('/notman', 'TabloController@list')->middleware('ensani');
Route::get('/newnotfi', 'TabloController@index')->middleware('ensani');
Route::post('/newnotf', 'TabloController@new')->middleware('ensani');
Route::post('/tablohazf', 'TabloController@up1')->middleware('ensani');
Route::post('/tabloed', 'TabloController@up2')->middleware('ensani');
Route::get('/tabloedit/{id}', 'TabloController@ed')->middleware('ensani');
/*kala*/
Route::get('/newkala', 'KalaController@index')->middleware('auth');
Route::post('/kalanew', 'KalaController@new')->middleware('auth');
Route::get('/mykala', 'KalaController@list1')->middleware('auth');
Route::get('/kalaman', 'KalaController@list2')->middleware('ensani');
Route::get('/kalaed/{id}', 'KalaController@ed')->middleware('ensani');
Route::post('/kalaup', 'KalaController@up')->middleware('ensani');
Route::post('/kalaup2', 'KalaController@up2')->middleware('ensani');