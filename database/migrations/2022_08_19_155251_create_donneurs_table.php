<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donneurs', function (Blueprint $table) {
            $table->id('id_donneur');
            $table->string('code_donneur');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('age');
            $table->string('sexe');
            $table->string('contact');
            $table->string('type');
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
        Schema::dropIfExists('donneurs');
    }
};
