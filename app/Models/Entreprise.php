<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_entreprise',
        'numero_cnps',
        'numero_compte_contribuable',
        'site_web',
        'telephone',
        'nom_responsable',
        'telephone_responsable',
        'email_entreprise',
        'adresse_geographie',
        'secteuractivite_id'
    ];
}
