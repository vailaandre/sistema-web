<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;

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

//Route::get('/', [CompanyController::class, 'index']);

/*Route::get('/listar-concedentes', [CompanyController::class, 'index']);
Route::get('/buscar-concedente/{id}', [CompanyController::class, 'show']);
Route::get('/cadastrar-concedente', [CompanyController::class, 'create']);
Route::post('/cadastrar-concedente', [CompanyController::class, 'store']);*/

Route::resource('companies', CompanyController::class);



