<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return 'HOME';
// });

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

// Route::get('/', 'PrincipalController@principal');


Route::get('/contactus', [\App\Http\Controllers\ContactUsController::class, 'contactUs']);

Route::get('/aboutus', [\App\Http\Controllers\AboutUsController::class, 'aboutUs']);

