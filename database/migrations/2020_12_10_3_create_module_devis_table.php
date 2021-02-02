<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_devis', function (Blueprint $table) {
            $table->bigInteger('id_devis')->unsigned()->index();
            $table->bigInteger('id_module')->unsigned()->index();
            $table->primary(['id_devis','id_module']);

            $table->foreign('id_devis')->references('id')->on('devis')->onDelete('cascade');
            $table->foreign('id_module')->references('id')->on('module')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_devis');
    }
}
