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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('IdRole')->default('3');
            $table->string('niveau');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('sexeutilisateur')->nullable();
            $table->string('etab_prov')->nullable();
            $table->date('date_naiss');
            $table->string('nomtuteur')->nullable();
            $table->string('prenomtuteur')->nullable();
            $table->string('adresseutilisateur')->nullable();
            $table->string('telutilisateur')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
