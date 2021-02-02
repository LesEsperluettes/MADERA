<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposantModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composant_module', function (Blueprint $table) {
            $table->bigInteger('id_module')->unsigned()->index();
            $table->bigInteger('id_composant')->unsigned()->index();
            $table->primary(['id_module','id_composant']);

            $table->foreign('id_module')->references('id')->on('module')->onDelete('cascade');
            $table->foreign('id_composant')->references('id')->on('composant')->onDelete('cascade');
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
