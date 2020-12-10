<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");
            $table->float("prix_base");
            $table->float("marge_commerciale");

            $table->unsignedBigInteger("gamme_id");
            $table->unsignedBigInteger("remplissage_id");
            $table->unsignedBigInteger("devis_id");
            $table->foreign("gamme_id")->references("id")->on("gammes");
            $table->foreign("remplissage_id")->references("id")->on("remplissages");
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
        Schema::table('modules',function (Blueprint $table) {
            $table->dropForeign("gamme_id");
            $table->dropForeign("remplissage_id");
            $table->dropForeign("devis_id");
        });
        Schema::dropIfExists('modules');
    }
}
