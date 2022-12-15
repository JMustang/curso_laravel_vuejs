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

// Route::get('/', 'PrincipalController@principal');
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contactus', [\App\Http\Controllers\ContactUsController::class, 'contactUs'])->name('site.aboutus');
Route::get('/aboutus', [\App\Http\Controllers\AboutUsController::class, 'aboutUs'])->name('site.contacts');
Route::get('/login', function(){return 'Login';})->name('site.login');


Route::prefix('/app')->group(function(){
    Route::get('/customers', function(){return 'Customers';})->name('site.customers');
    Route::get('/providers', function(){return 'Providers';})->name('site.providers');
    Route::get('/products', function(){return 'Products';})->name('site.products');

});

Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class,'teste'])->name('teste');


Route::fallback(function(){
    echo 'A pagina acessada nao existe. <a href="'.route('site.index').'">Clique aqui</a> para voltar ao inicio.';
});