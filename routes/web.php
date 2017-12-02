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
    return redirect('login');
});

Auth::routes();


Route::middleware(['auth'])->group(function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/inventory', 'PagesController@inventory')->name('inventory');
  //Build Files
  Route::get('/department', 'PagesController@department')->name('department');
  Route::post('/department', 'BuildController@createDepartment')->name('addDepartment');
  Route::get('/state', 'PagesController@state')->name('state');
  Route::post('/state', 'BuildController@createState')->name('addState');
  Route::get('/ownership', 'PagesController@ownership')->name('ownership');
  Route::post('/ownership', 'BuildController@createOwnership')->name('addOwnership');
  Route::get('/type', 'PagesController@type')->name('type');
  Route::post('/type', 'BuildController@createItemType')->name('addItemType');
  Route::get('/manufacturer', 'PagesController@manufacturer')->name('manufacturer');
  Route::post('/manufacturer', 'BuildController@createManufacturer')->name('addManufacturer');
  Route::get('/supplier', 'PagesController@supplier')->name('supplier');
  Route::post('/supplier', 'BuildController@createSupplier')->name('addSupplier');

  Route::get('/build-data', 'BuildController@data')->name('getAllData');
  Route::get('/get-data', 'BuildController@details')->name('getData');
  Route::post('/update-data', 'BuildController@update')->name('updateData');
  Route::get('/delete-data', 'BuildController@delete')->name('deleteData');
  Route::get('/restore-data', 'BuildController@restore')->name('restoreData');

  //New Item Routes
  Route::get('/item/new', 'ItemController@index')->name('newItem');
  Route::get('/options', 'OptionController@getOptions')->name('getOptions');
});
