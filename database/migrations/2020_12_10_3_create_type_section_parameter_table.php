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
            $table->bigInteger('type_section_id')->unsigned()->index();
            $table->bigInteger('type_parameter_id')->unsigned()->index();

            $table->float('valeur');
            $table->smallInteger('ordre');

            $table->foreign('type_section_id')->references('id')->on('type_section')->onDelete('cascade');
            $table->foreign('type_parameter_id')->references('id')->on('type_parameter')->onDelete('cascade');
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
