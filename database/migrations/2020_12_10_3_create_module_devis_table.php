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
            $table->bigInteger('devis_id')->unsigned()->index();
            $table->bigInteger('module_id')->unsigned()->index();
            $table->primary(['devis_id','module_id']);

            $table->foreign('devis_id')->references('id')->on('devis')->onDelete('cascade');
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
        Schema::dropIfExists('module_devis');
    }
}
