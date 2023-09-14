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


Route::get('/front', [MainController::class,'front']);
Route::get('/about', [MainController::class,'about']);
Route::get('/contact', [MainController::class,'contact']);

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('app/public/fichiers/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

Route::post('/updatePaper', [MainController::class,'updatePaper']);
Route::get('/editFiche/{fiche}', [MainController::class,'editFiche']);
Route::get('/showFiche/{fiche}', [MainController::class,'showFiche']);
Route::get('/getFichesAjax', [MainController::class,'getFichesAjax']);
Route::get('/deleteFiche/{fiche}', [MainController::class,'deleteFiche']);
Route::get('/fiches', [MainController::class,'displayAll']);
Route::post('/savePaper', [MainController::class,'savePaper']);
Route::get('/getArrondissementAjax', [MainController::class,'getArrondissement']);
Route::get('/getCommuneAjax', [MainController::class,'getCommune']);
Route::get('/getDepartementAjax', [MainController::class,'getDepartement']);
Route::get('/login', [MainController::class,'login']);
Route::get('/forget', [MainController::class,'forget']);
Route::get('/dashboard', [MainController::class,'dashboard']);
Route::get('/addPaper', [MainController::class,'addPaper']);

Route::get('/generatePdf/{fiche}', [MainController::class,'generatePdf']);
