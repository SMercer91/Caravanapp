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
            $table->foreign('caravan_id')->references('id')->on('caravans')->onDelete('cascade');
            $table->string('double_glazing');
            $table->string('central_heating');
            $table->string('ensuite');
            $table->string('washer');
            $table->string('dishwasher');
            $table->string('bath');
            $table->string('intergrated_fridge_freezer');
            $table->string('walk_in_wardrobe');
            $table->string('separate_toilet');
            $table->string('freestanding_furniture');
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
