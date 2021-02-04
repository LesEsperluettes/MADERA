<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionComposantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_composant', function (Blueprint $table) {
            $table->bigInteger('section_id')->unsigned()->index();
            $table->bigInteger('composant_id')->unsigned()->index();
            $table->primary(['section_id','composant_id']);

            $table->integer('quantite');

            $table->foreign('section_id')->references('id')->on('section')->onDelete('cascade');
            $table->foreign('composant_id')->references('id')->on('composant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('composant_module');
    }
}
