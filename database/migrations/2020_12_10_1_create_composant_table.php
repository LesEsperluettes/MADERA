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

            $table->bigInteger('id_famille_composant')->unsigned()->index();
            $table->bigInteger('id_fournisseur')->unsigned()->index();
            $table->foreign('id_famille_composant')->references("id")->on("famille_composant");
            $table->foreign('id_fournisseur')->references("id")->on("fournisseur");
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
            $table->dropForeign("id_famille_composant");
            $table->dropForeign("id_fournisseur");
        });
        Schema::dropIfExists('composant');
    }
}
