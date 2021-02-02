<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeSectionParameterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_section_parameter', function (Blueprint $table) {
            $table->bigInteger('id_type_section')->unsigned()->index();
            $table->bigInteger('id_type_parameter')->unsigned()->index();
            $table->primary(['id_type_section','id_type_parameter']);

            $table->float('valeur');

            $table->foreign('id_type_section')->references('id')->on('type_section')->onDelete('cascade');
            $table->foreign('id_type_parameter')->references('id')->on('type_parameter')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_section_parameter');
    }
}
