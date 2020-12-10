<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gammes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");

            $table->unsignedBigInteger("isolant_id");
            $table->unsignedBigInteger("ouverture_id");
            $table->unsignedBigInteger("qualite_huisserie_id");
            $table->unsignedBigInteger("ossature_bois_id");
            $table->unsignedBigInteger("finition_id");
            $table->unsignedBigInteger("composant_id");

            $table->foreign("isolant_id")->references("id")->on("isolants");
            $table->foreign("ouverture_id")->references("id")->on("ouvertures");
            $table->foreign("qualite_huisserie_id")->references("id")->on("qualite_huisseries");
            $table->foreign("ossature_bois_id")->references("id")->on("ossature_bois");
            $table->foreign("finition_id")->references("id")->on("finitions");
            $table->foreign("composant_id")->references("id")->on("composants");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gammes',function (Blueprint $table) {
            $table->dropForeign("isolant_id");
            $table->dropForeign("ouverture_id");
            $table->dropForeign("qualite_huisserie_id");
            $table->dropForeign("ossature_bois_id");
            $table->dropForeign("finition_id");
            $table->dropForeign("composant_id");
        });
        Schema::dropIfExists('gammes');
    }
}
