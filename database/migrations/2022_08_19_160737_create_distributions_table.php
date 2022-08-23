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
        Schema::create('distributions', function (Blueprint $table) {
            $table->id('id_distribution');
            $table->integer('quantite');
            $table->unsignedBigInteger('id_demande');
            $table->foreign('id_demande')
                ->references('id_demande')
                ->on('demandes')
                ->onDelete('cascade');
            $table->unsignedBigInteger('id_infirmier');
            $table->foreign('id_infirmier')
                ->references('id_infirmier')
                ->on('infirmiers')
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
        Schema::dropIfExists('distributions');
    }
};
