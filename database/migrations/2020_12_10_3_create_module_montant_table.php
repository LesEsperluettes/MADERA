<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleMontantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_montant', function (Blueprint $table) {
            $table->bigInteger('id_module')->unsigned()->index();
            $table->bigInteger('id_montant')->unsigned()->index();
            $table->primary(['id_module','id_montant']);

            $table->foreign('id_module')->references('id')->on('module')->onDelete('cascade');
            $table->foreign('id_montant')->references('id')->on('montant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_montant');
    }
}
