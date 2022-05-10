<?php

use App\Http\Controllers\InscriptionController;
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

Route::get('/', function () {
    $pays = \App\Models\Pays::orderBy('nom','asc')->get();
    $secteuractivites = \App\Models\SecteurActivite::orderBy('libelle','asc')->get();
    return view('accueil',compact('pays','secteuractivites'));
})->name('accueil');

/*Route::post('/generate/badge', function (Request $request){
    dd($request->all());
})->name('generate.badge');*/


Route::post('/generate/badge',[InscriptionController::class,'store'])->name('generate.badge');
Route::get('/success/page',[InscriptionController::class,'success'])->name('generate.success.badge');
Route::get('/generate/imprimer/badge',[InscriptionController::class,'imprimerBadge'])->name('generate.imprimer.badge');
Route::get('/send-email/badge', [InscriptionController::class, 'emailbadge'])->name('send-email.badge');
