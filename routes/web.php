<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/getFichesAjax', [MainController::class,'getFichesAjax']);
Route::get('/fiches', [MainController::class,'displayAll']);
Route::post('/savePaper', [MainController::class,'savePaper']);
Route::get('/getArrondissementAjax', [MainController::class,'getArrondissement']);
Route::get('/getCommuneAjax', [MainController::class,'getCommune']);
Route::get('/getDepartementAjax', [MainController::class,'getDepartement']);
Route::get('/', [MainController::class,'login']);
Route::get('/forget', [MainController::class,'forget']);
Route::get('/dashboard', [MainController::class,'dashboard']);
Route::get('/addPaper', [MainController::class,'addPaper']);
