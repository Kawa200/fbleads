<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTemporal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospectos_temp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('apellidos');
            $table->bigInteger('document')->unique();
            $table->string('ciudad_c');
            $table->string('phone_mobile');
            $table->bigInteger('email');
            $table->string('medio');
            $table->string('datetime');
            $table->string('facebook_forms_c');
            $table->enum('validated',['0','1'])->default('0');
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
        Schema::dropIfExists('prospectos_temp');
    }
}
