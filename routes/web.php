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

// Login
Route::get('login', function(){
    return View::make('login');
});
   Route::post('/login', 'Auth\LoginController@login');
   Route::get('logout', 'UserController@logout'); 

Route::get('/dashboard', function(){
    return view('dashboard');
});

Route::group(['prefix' => 'employees'], function(){
    Route::get('/list', 'EmployeeController@show');
    Route::post('/create', 'EmployeeController@create');
    Route::post('/update/{employee_id}', 'EmployeeController@update');
    Route::post('/delete/{employee_id}', 'EmployeeController@delete');
    Route::get('/forms/createEmployee', function(){
       return view('forms.createEmployee');
    });
});

Route::get('/api/details/employees/{employee_id}', 'EmployeeController@details');
Route::get('/api/details/customers/{customers_id}', 'CustomerController@details');
// TODO :: corregir ruta
//Route::get('/api/customers/records/details/{customers_id}', 'RecordController@getDetailsRecordById');


Route::group(['prefix' => 'customers'], function(){
    Route::get('/list', 'CustomerController@show');
    Route::post('/create', 'CustomerController@create');
    Route::post('/update/{customers_id}', 'CustomerController@update');
    Route::get('/delete/{customers_id}', 'CustomerController@delete');
    Route::get('/exportCsv', 'CustomerController@exportCsv');
    Route::get('/records/list', 'RecordController@getRecords');
    Route::get('/records/details/{customer_id}', 'RecordController@getDetailsRecordById');
    Route::post('/records/create', 'RecordController@create');
    Route::get('/records/exportCsv/{customer_id}', 'RecordController@exportCsv');
    Route::get('/records/exportPdf/{customer_id}', 'RecordController@exportPdf');
});
Route::group(['prefix' => 'users'], function(){
    Route::get('/list', 'UserController@show');
    Route::post('/create', 'UserController@create');
    Route::post('/update/{user_id}', 'UserController@update');
    Route::post('/delete', 'UserController@delete');

});

//Route::group(['prefix' => 'records'], function(){
//    Route::get('/list', 'RecordController@getRecords');
//    Route::get('/details/{customer_id}', 'RecordController@getDetailsRecordById');
//});

