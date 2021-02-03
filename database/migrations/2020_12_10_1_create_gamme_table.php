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

            $table->bigInteger('isolant_id')->unsigned()->index();
            $table->bigInteger('couverture_id')->unsigned()->index();
            $table->bigInteger('qualite_huisserie_id')->unsigned()->index();
            $table->bigInteger('ossature_bois_id')->unsigned()->index();
            $table->bigInteger('finition_id')->unsigned()->index();

            $table->foreign('isolant_id')->references("id")->on("isolant");
            $table->foreign('couverture_id')->references("id")->on("couverture");
            $table->foreign('qualite_huisserie_id')->references("id")->on("qualite_huisserie");
            $table->foreign('ossature_bois_id')->references("id")->on("ossature_bois");
            $table->foreign('finition_id')->references("id")->on("finition");
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
            $table->dropForeign('isolant_id');
            $table->dropForeign('couverture_id');
            $table->dropForeign('qualite_huisserie_id');
            $table->dropForeign('ossature_bois_id');
            $table->dropForeign('finition_id');
        });
        Schema::dropIfExists('gamme');
    }
}
