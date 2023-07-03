<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /*  Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string('nom_entreprise')->nullable();
            $table->string('numero_cnps')->nullable();
            $table->string('numero_compte_contribuable')->nullable();
            $table->string('site_web')->nullable();
            $table->string('telephone')->nullable();
            $table->string('nom_responsable')->nullable();
            $table->string('telephone_responsable')->nullable();
            $table->string('email_entreprise')->nullable();
            $table->string('adresse_geographie')->nullable();
            $table->unsignedBigInteger('secteuractivite_id');
            $table->foreign('secteuractivite_id')
                ->references('id')
                ->on('secteur_activites')
                ->onDelete('cascade');
            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
