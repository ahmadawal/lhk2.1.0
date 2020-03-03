<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::get('/asal', 'LhkController@index')->name('formlhk');
Route::post('/store', 'LhkController@store')->name('storelhk');
Route::get('/report', 'ReportController@index')->name('reportlhk');
Route::get('/list', 'ReportController@list')->name('listlhk');
Route::get('/detail/{id}', 'ReportController@detail')->name('detaillhk');

Route::get('/fr/{id}', 'ReportController@fr')->name('approvefr');
Route::get('/sv/{id}', 'ReportController@sv')->name('approvesv');
Route::get('/mn/{id}', 'ReportController@mn')->name('approvemn');

Route::get('/excel/{id}', 'ReportController@excel')->name('excel');
Route::get('/testexcel', 'ReportController@testexcel');

// Add this route the last, so it doesn't interfere with your other routes.
// Route::get(
//     '{uri}',
//     '\\'.Pallares\LaravelNuxt\Controllers\NuxtController::class
// )->where('uri', '.*');

// Route::get('/form', 'DlhkCtr@index')->name('form');
/*
Route::get('/', function(){
  return view('pages.form');
})->name('home');
*/
Route::get('dashboard', function(){
  return view('pages.dashboard');
})->name('ds');
Route::get('/', function(){
  $mac = DB::table('t_mac')->get();
  return view('pages.form', ['mac' => $mac]);
})->name('form');

Route::post('create-new', 'DlhkCtr@createNew')->name('cn');
Route::get('mac', 'DlhkCtr@macData')->name('mac');
Route::post('sn', 'DlhkCtr@storeNew')->name('sn');
Route::get('list', 'DLhkCtr@listLHK')->name('list');
Route::get('print', 'DLhkCtr@printLHK')->name('pr');

Route::get('sb', function(){
  return view('pages.test');
});
