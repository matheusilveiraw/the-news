<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use App\Http\Controllers\PesquisaController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [NewsController::class, 'index'])->name('index');

Route::get('/politics', [NewsController::class, 'pesquisaPolitica'])->name('politica');

Route::get('/sports', [NewsController::class, 'pesquisaEsportes'])->name('esportes');

Route::get('/technology', [NewsController::class, 'pesquisaTecnologia'])->name('tecnologia');

Route::get('/entertainment', [NewsController::class, 'pesquisaEntretenimento'])->name('entretenimento');

Route::get('/buscar', [PesquisaController::class, 'buscar'])->name('buscar');

// Route::get('/buscar', function (Request $request) {
//     $query = $request->query('query'); // Captura o valor do parâmetro 'query'
    
//     return "Você pesquisou por: " . $query;
// });