<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger("type_section_id");
            $table->unsignedBigInteger("type_parametre_id");
            $table->foreign("type_section_id")->references("id")->on("type_sections");
            $table->foreign("type_parametre_id")->references("id")->on("type_parametres");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sections',function (Blueprint $table) {
            $table->dropForeign("type_section_id");
            $table->dropForeign("type_parametre_id");
        });
        Schema::dropIfExists('sections');
    }
}
