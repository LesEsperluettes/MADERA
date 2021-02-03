<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComposantModuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composant_module', function (Blueprint $table) {
            $table->bigInteger('module_id')->unsigned()->index();
            $table->bigInteger('composant_id')->unsigned()->index();
            $table->primary(['module_id','composant_id']);

            $table->foreign('module_id')->references('id')->on('module')->onDelete('cascade');
            $table->foreign('composant_id')->references('id')->on('composant')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('composant_module');
    }
}
