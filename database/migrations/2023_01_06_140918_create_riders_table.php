<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id');
            $table->string('name');
            $table->integer('number');
            $table->string('img_flag');
            $table->string('img_rider');
            $table->string('icon_rider');
            $table->date('date_of_brith');
            $table->string('place_of_brith');
            $table->double('height');
            $table->double('weight');
            $table->integer('gp_victories');
            $table->integer('worldchampionships');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riders');
    }
};
