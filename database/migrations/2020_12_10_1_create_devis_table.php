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

            $table->bigInteger('client_id')->unsigned()->index();
            $table->foreign('client_id')->references("id")->on("client");
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
            $table->dropForeign("client_id");
        });
        Schema::dropIfExists('devis');
    }
}
