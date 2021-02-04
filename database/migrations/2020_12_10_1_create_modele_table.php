<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("nom");

            $table->bigInteger('gamme_id')->unsigned()->index();
            $table->foreign("gamme_id")->references("id")->on("gamme");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modele',function (Blueprint $table) {
            $table->dropForeign("gamme_id");
        });
        Schema::dropIfExists('modele');
    }
}
