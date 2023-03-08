<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id('Idutilisateur');
            $table->string('NomUtilisateur');
            $table->string('PrenomUtilisateur');
            $table->string('EmailUtilisateur')->unique();
            $table->string('PasswordUtilisateur');
            $table->string('SexeUtilisateur');
            $table->string('AdresseUtilisateur');
            $table->string('TelUtilisateur');
            $table->tinyInteger('IdRole')->default('0');
            //$table->foreign('IdRole')->default('0')->references('IdRole')->on('Role');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('utilisateur');
    }
}
