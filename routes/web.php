<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyControllers\IndexController;
use App\Http\Controllers\MyControllers\UsersController;
use App\Http\Controllers\MyControllers\ParcelController;
use App\Http\Controllers\MyControllers\ContactController;
use App\Http\Controllers\MyControllers\CreateUsersController;



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

Route::get('/',[IndexController::class, 'index']);
Route::get('/Users',[UsersController::class, 'Users']);
Route::get('/Parcels',[ParcelController::class, 'Parcels']);
Route::get('/Contact',[ContactController::class, 'Contact']);
Route::get('/CreateUsers',[CreateUsersController::class, 'CreateUsers']);
Route::get('/Users',[CreateUsersController::class, 'retrieveInformation']);
Route::post('/submitCreateUsers',[CreateUsersController::class, 'submitCreateUsers']);