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

Route::get('/login', function(){
    return view('login');
});

Route::group(['prefix' => 'employees'], function(){
    Route::get('/list', 'EmployeeController@show');
    Route::post('/create', 'EmployeeController@create');
    Route::post('/update/{employee_id}', 'EmployeeController@update');
    Route::get('/delete/{employee_id}', 'EmployeeController@delete');
    Route::get('/forms/createEmployee', function(){
       return view('forms.createEmployee');
    });
});

Route::get('api/details/{employee_id}', 'EmployeeController@details');


Route::group(['prefix' => 'customers'], function(){
    Route::get('/list', 'CustomerController@show');
    Route::post('/create', 'CustomerController@create');
    Route::post('/update/{customers_id}', 'CustomerController@update');
    Route::post('/delete', 'CustomerController@delete');
});

Route::get('records/list', 'RecordController@show');