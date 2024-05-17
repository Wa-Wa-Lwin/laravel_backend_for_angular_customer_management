<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Employee
Route::get('/employees','App\Http\Controllers\EmployeeController@getEmployee');

Route::get('/employee/{id}','App\Http\Controllers\EmployeeController@getEmployeeById');

Route::post('/addEmployee','App\Http\Controllers\EmployeeController@addEmployee');

Route::put('/updateEmployee/{id}','App\Http\Controllers\EmployeeController@updateEmployee');

Route::delete('/deleteEmployee/{id}','App\Http\Controllers\EmployeeController@deleteEmployee');
// Employee

// User
Route::post('/register','App\Http\Controllers\UserController@register');

Route::post('/login','App\Http\Controllers\UserController@login');
