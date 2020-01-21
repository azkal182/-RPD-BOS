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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/select2', function () {
    return view('select2');
});

Route::get('/treeview', function () {
    return view('treeview');
});


Route::get('newlayout', function (){
  return view('newlayout');
});



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

// Route::get('/anggaran', function(){
//   return view('admin.anggaran');
// });

Route::get('/tes', function(){
  return view('tes');
});

//Route::get('/anggaran', 'AnggaranController@index');
Route::get('/anggaran', 'AnggaranController@komp1s');
Route::get('/json-komp2', 'AnggaranController@komp2s');
Route::get('/json-komp3', 'AnggaranController@komp3s');
Route::get('/json-komp4', 'AnggaranController@komp4s');
Route::get('/json-detail-komp', 'AnggaranController@detail_komps');


Route::get('/test/table', 'testcontroller@index');
Route::get('/test', 'testcontroller@index');
Route::get('/json-komp2', 'testcontroller@komp2s');
Route::get('/json-komp3', 'testcontroller@komp3s');
Route::get('/json-komp4', 'testcontroller@komp4s');
Route::get('/json-detail-komp', 'testcontroller@detail_komps');
