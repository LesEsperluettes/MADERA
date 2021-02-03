<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleRemplissageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_remplissage', function (Blueprint $table) {
            $table->bigInteger('module_id')->unsigned()->index();
            $table->bigInteger('remplissage_id')->unsigned()->index();
            $table->primary(['module_id','remplissage_id']);

            $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');
            $table->foreign('remplissage_id')->references('id')->on('remplissage')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_remplissage');
    }
}
