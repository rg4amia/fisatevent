<?php

use App\Http\Controllers\AccueilController;
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

Route::get('/inscription/participant',[AccueilController::class,'participant'])->name('inscription.participant');
Route::get('/inscription/entreprise',[AccueilController::class,'entreprise'])->name('inscription.entreprise');
Route::post('/generate/badge',[InscriptionController::class,'storeParticipant'])->name('generate.badge');
Route::post('/generate/badge/entreprise',[InscriptionController::class,'storeEntreprise'])->name('generate.badge.entreprise');
Route::get('/success/page',[InscriptionController::class,'success'])->name('generate.success.badge');
Route::get('/success/page/entreprise',[InscriptionController::class,'successEntreprise'])->name('generate.success.badge.etpse');
Route::get('/generate/imprimer/badge',[InscriptionController::class,'imprimerBadge'])->name('generate.imprimer.badge');
Route::get('/generate/imprimer/badge/entreprise',[InscriptionController::class,'imprimerBadgeEntreprise'])->name('generate.imprimer.badge.entreprise');
Route::get('/send-email/badge', [InscriptionController::class, 'emailbadge'])->name('send-email.badge');
Route::get('/send-email/badge/entreprise', [InscriptionController::class, 'emailbadgeEntreprise'])->name('send-email.badge.entreprise');
