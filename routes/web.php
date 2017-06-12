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
Route::get('auth/login', function(){
    return View::make('login');
});

Route::post('auth/login', function(){
    if(Auth::attempt(array('user' => Request::get('user'), 'password' => Request::get('password')))){
        dd('si');
        return Redirect::to('customers/list');
    }else{
        dd('no');
        return Redirect::to('auth/login');
    }
});


Route::get('/dashboard', function(){
    return view('dashboard');
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

Route::get('/api/details/employees/{employee_id}', 'EmployeeController@details');
Route::get('/api/details/customers/{customers_id}', 'CustomerController@details');
// TODO :: corregir ruta
//Route::get('/api/customers/records/details/{customers_id}', 'RecordController@getDetailsRecordById');


Route::group(['prefix' => 'customers'], function(){
    Route::get('/list', 'CustomerController@show');
    Route::post('/create', 'CustomerController@create');
    Route::post('/update/{customers_id}', 'CustomerController@update');
    Route::post('/delete', 'CustomerController@delete');
    Route::get('/records/list', 'RecordController@getRecords');
    Route::get('/records/details/{customer_id}', 'RecordController@getDetailsRecordById');
    Route::post('/records/create', 'RecordController@create');

});

//Route::group(['prefix' => 'records'], function(){
//    Route::get('/list', 'RecordController@getRecords');
//    Route::get('/details/{customer_id}', 'RecordController@getDetailsRecordById');
//});
