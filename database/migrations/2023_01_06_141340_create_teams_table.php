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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('rider_id');
            $table->string('name');
            $table->string('bike');
            // $table->string('rider_1');
            // $table->string('rider_2');
            $table->string('img_bike');
            // $table->string('team_status');
            // $table->integer('team_standings');
            // $table->double('team_points');
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
        Schema::dropIfExists('teams');
    }
};
