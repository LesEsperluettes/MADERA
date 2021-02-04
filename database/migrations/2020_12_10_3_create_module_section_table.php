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
            $table->bigInteger('module_id')->unsigned()->index();
            $table->bigInteger('section_id')->unsigned()->index();
            $table->primary(['module_id','section_id']);

            $table->integer('quantite');

            $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');
            $table->foreign('section_id')->references('id')->on('section')->onDelete('cascade');
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
