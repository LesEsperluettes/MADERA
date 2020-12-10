<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float("pourcentage_demande");
            $table->float("pourcentage_paye");

            $table->unsignedBigInteger("devis_id");
            $table->foreign("devis_id")->references("id")->on("devis");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturations',function (Blueprint $table) {
            $table->dropForeign("devis_id");
        });
        Schema::dropIfExists('facturations');
    }
}
