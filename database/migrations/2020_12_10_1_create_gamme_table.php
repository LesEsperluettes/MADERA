<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGammeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gamme', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");

            $table->bigInteger('id_isolant')->unsigned()->index();
            $table->bigInteger('id_couverture')->unsigned()->index();
            $table->bigInteger('id_qualite_huisserie')->unsigned()->index();
            $table->bigInteger('id_ossature_bois')->unsigned()->index();
            $table->bigInteger('id_finition')->unsigned()->index();

            $table->foreign('id_isolant')->references("id")->on("isolant");
            $table->foreign('id_couverture')->references("id")->on("couverture");
            $table->foreign('id_qualite_huisserie')->references("id")->on("qualite_huisserie");
            $table->foreign('id_ossature_bois')->references("id")->on("ossature_bois");
            $table->foreign('id_finition')->references("id")->on("finition");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gamme',function (Blueprint $table) {
            $table->dropForeign('id_isolant');
            $table->dropForeign('id_couverture');
            $table->dropForeign('id_qualite_huisserie');
            $table->dropForeign('id_ossature_bois');
            $table->dropForeign('id_finition');
        });
        Schema::dropIfExists('gamme');
    }
}
