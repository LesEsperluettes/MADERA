<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composant', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");

            $table->bigInteger('famille_composant_id')->unsigned()->index();
            $table->bigInteger('fournisseur_id')->unsigned()->index();
            $table->foreign('famille_composant_id')->references("id")->on("famille_composant");
            $table->foreign('fournisseur_id')->references("id")->on("fournisseur");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('composant',function (Blueprint $table) {
            $table->dropForeign("famille_composant_id");
            $table->dropForeign("fournisseur_id");
        });
        Schema::dropIfExists('composant');
    }
}
