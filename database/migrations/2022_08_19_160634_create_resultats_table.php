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
        Schema::create('resultats', function (Blueprint $table) {
            $table->id('id_resulatt');
            $table->string('hpa');
            $table->string('hpb');
            $table->string('vih');
            $table->string('rhs');
            $table->string('groupe_sanguin');
            $table->unsignedBigInteger('id_donneur');
            $table->foreign('id_donneur')
                ->references('id_donneur')
                ->on('donneurs')
                ->onDelete('cascade');
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
        Schema::dropIfExists('resultats');
    }
};
