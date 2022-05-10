<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecteurActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data  = [
            [
                'libelle'   => 'Agroalimentaire',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Banque / Assurance',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Bois / Papier / Carton / Imprimerie',
                'icon'      => '',
            ],
            [
                'libelle'   => 'BTP / Matériaux de construction',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Chimie / Parachimie',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Commerce / Négoce / Distribution',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Édition / Communication / Multimédia',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Électronique / Électricité',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Études et conseils',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Industrie pharmaceutique',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Informatique / Télécoms',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Machines et équipements / Automobile',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Métallurgie / Travail du métal',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Plastique / Caoutchouc',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Services aux entreprises',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Textile / Habillement / Chaussure',
                'icon'      => '',
            ],
            [
                'libelle'   => 'Transports / Logistique',
                'icon'      => '',
            ],
        ];

        $secteuractivie = DB::table('secteur_activites')->insert($data);
    }
}
