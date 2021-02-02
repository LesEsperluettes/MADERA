<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_section', function (Blueprint $table) {
            $table->bigInteger('id_module')->unsigned()->index();
            $table->bigInteger('id_section')->unsigned()->index();
            $table->primary(['id_module','id_section']);

            $table->foreign('id_module')->references('id')->on('module')->onDelete('cascade');
            $table->foreign('id_section')->references('id')->on('section')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_section');
    }
}
