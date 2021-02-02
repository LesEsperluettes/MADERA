<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom_projet");
            $table->string("reference_projet");

            $table->bigInteger('id_client')->unsigned()->index();
            $table->foreign('id_client')->references("id")->on("client");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('devis',function (Blueprint $table) {
            $table->dropForeign("id_client");
        });
        Schema::dropIfExists('devis');
    }
}
