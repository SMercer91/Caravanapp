<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaravanExtrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caravan_extras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('caravan_id')->unsigned();
            $table->foreign('caravan_id')->references('id')->on('caravans');
            $table->string('extra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caravan_extras');
    }
}
