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
            // $table->string('team_name');
            $table->string('img_rider');
            $table->string('icon_rider');
            // $table->string('team_bike');
            // $table->integer('rider_standings');
            // $table->double('rider_points');
            // $table->foreignId('team_id');
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
