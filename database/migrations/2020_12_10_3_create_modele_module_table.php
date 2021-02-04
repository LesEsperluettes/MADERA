<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeleModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele_module', function (Blueprint $table) {
            $table->bigInteger('modele_id')->unsigned()->index();
            $table->bigInteger('module_id')->unsigned()->index();

            $table->foreign('modele_id')->references('id')->on('modele')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modele_module');
    }
}
