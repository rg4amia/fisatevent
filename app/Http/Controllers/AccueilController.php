<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function participant()
    {
       // $pays = \App\Models\Pays::orderBy('nom', 'asc')->get();
        $secteuractivites = \App\Models\SecteurActivite::orderBy('libelle', 'asc')->get();
        return view('font-end.insert-participant', compact('secteuractivites'));
    }
    /* public function participant(){
        $pays = \App\Models\Pays::orderBy('nom','asc')->get();
        $secteuractivites = \App\Models\SecteurActivite::orderBy('libelle','asc')->get();
        return view('inscription.participant',compact('pays','secteuractivites'));
    } */

    public function entreprise(){
        $pays = \App\Models\Pays::orderBy('nom','asc')->get();
        $secteuractivites = \App\Models\SecteurActivite::orderBy('libelle','asc')->get();
        return view('inscription.entreprise',compact('pays','secteuractivites'));
    }
}
