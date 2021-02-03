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
            $table->bigInteger('module_id')->unsigned()->index();
            $table->bigInteger('montant_id')->unsigned()->index();
            $table->primary(['module_id','montant_id']);

            $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');
            $table->foreign('montant_id')->references('id')->on('montant')->onDelete('cascade');
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
