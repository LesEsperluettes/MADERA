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

            $table->unsignedBigInteger("client_id");
            $table->foreign("client_id")->references("id")->on("clients");
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
