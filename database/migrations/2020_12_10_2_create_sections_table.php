<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('type_section_id')->unsigned()->index();
            $table->foreign('type_section_id')->references("id")->on("type_section");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('section',function (Blueprint $table) {
            $table->dropForeign("type_section_id");
        });
        Schema::dropIfExists('section');
    }
}
