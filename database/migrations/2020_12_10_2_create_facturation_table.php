<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float("total_demande");
            $table->float("total_paye");

            $table->bigInteger('devis_id')->unsigned()->index();
            $table->foreign('devis_id')->references("id")->on("devis");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturation',function (Blueprint $table) {
            $table->dropForeign("devis_id");
        });
        Schema::dropIfExists('facturation');
    }
}
