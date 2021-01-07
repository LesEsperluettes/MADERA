<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules_devis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('devis_id');
            $table->unsignedBigInteger('module_id');

            $table->foreign('devis_id')->references('id')->on('devis')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modules_devis');
    }
}
