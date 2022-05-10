<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'fonction',
        'nomdirigeantfonction',
        'secteuractivite_id',
        'pay_id',
        'ville',
        'adresse',
        'email',
        'telephone',
        'mobile',
        'fax',
        'expositioncommerciale',
        'forumdiscussion',
        'rencontrebtob',
        'reunionministerielle',
        'sessionspecialeprojet',
        'rendezvous',
    ];

    public function pay(){
        return $this->belongsTo(Pays::class);
    }
}
