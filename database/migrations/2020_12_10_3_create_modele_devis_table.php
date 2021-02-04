<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeleDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele_devis', function (Blueprint $table) {
            $table->bigInteger('devis_id')->unsigned()->index();
            $table->bigInteger('modele_id')->unsigned()->index();
            $table->primary(['devis_id','modele_id']);

            $table->foreign('devis_id')->references('id')->on('devis')->onDelete('cascade');
            $table->foreign('modele_id')->references('id')->on('modele')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele_devis');
    }
}
