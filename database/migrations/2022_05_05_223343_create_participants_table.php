<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('fonction')->nullable();
            $table->string('nomdirigeantfonction')->nullable();
            $table->unsignedBigInteger('secteuractivite_id');
            $table->foreign('secteuractivite_id')
                ->references('id')
                ->on('secteur_activites')
                ->onDelete('cascade');
            $table->unsignedBigInteger('pay_id');
            $table->string('ville')->nullable();
            $table->string('adresse')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('fax')->nullable();
            $table->boolean('expositioncommerciale')->default(false);
            $table->boolean('forumdiscussion')->default(false);
            $table->boolean('rencontrebtob')->default(false);
            $table->boolean('reunionministerielle')->default(false);
            $table->boolean('sessionspecialeprojet')->default(false);
            $table->boolean('rendezvous')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
