<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nom");
            $table->float("prix_base");
            $table->float("marge_commerciale");

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
        Schema::table('module',function (Blueprint $table) {
            $table->dropForeign("gamme_id");
        });
        Schema::dropIfExists('modules');
    }
}
