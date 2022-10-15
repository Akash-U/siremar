<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\inspectorController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\residentController;
use App\Http\Controllers\registerController;

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
Route::post('login',[loginController::class, 'login']);
Route::post('register_emp',[registerController::class, 'register_emp']);
Route::post('register_res',[registerController::class, 'register_res']);
Route::post('contact_us',[contactController::class, 'contact_us']);
Route::post('update_register_res',[inspectorController::class, 'update_register_res']);
Route::post('update_register_emp',[adminController::class, 'update_register_emp']);
Route::get('load_table_events',[inspectorController::class, 'load_table_events']);
Route::get('load_table_family',[adminController::class, 'load_table_family']);
Route::get('load_table_events',[adminController::class, 'load_table_events']);
Route::get('load_diagr_business',[adminController::class, 'load_diagr_business']);
Route::get('load_table_business',[adminController::class, 'load_table_business']);
Route::get('load_table_family',[inspectorController::class, 'load_table_family']);
Route::get('load_pie_family',[adminController::class, 'admin']);
