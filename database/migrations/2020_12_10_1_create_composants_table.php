<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");

            $table->unsignedBigInteger("famille_composant_id");
            $table->unsignedBigInteger("fournisseur_id");
            $table->foreign("famille_composant_id")->references("id")->on("famille_composants");
            $table->foreign("fournisseur_id")->references("id")->on("fournisseurs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('composants',function (Blueprint $table) {
            $table->dropForeign("famille_composant_id");
            $table->dropForeign("fournisseur_id");
        });
        Schema::dropIfExists('composants');
    }
}
