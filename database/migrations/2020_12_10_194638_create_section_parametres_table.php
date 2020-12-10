<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTypeParametresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_parametres', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("valeur");

            $table->unsignedBigInteger("section_id");
            $table->foreign("section_id")->references("id")->on("sections");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('section_parametres',function (Blueprint $table) {
            $table->dropForeign("section_id");
        });
        Schema::dropIfExists('section_type_parametres');
    }
}
