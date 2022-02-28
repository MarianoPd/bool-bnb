<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flats', function (Blueprint $table) {

            //nullabe solo temporaneri DA RIMUOVERE
            $table->id();
            $table->string('title', 100);
            $table->string('city', 45);
            $table->string('province', 3)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('latitude', 20)->nullable();
            $table->string('longitude', 20)->nullable();
            $table->tinyInteger('room_number')->unsigned()->nullable()->default(1);
            $table->tinyInteger('bed_number')->unsigned()->nullable()->default(1);
            $table->tinyInteger('bathroom_number')->unsigned()->nullable()->default(1);
            $table->smallInteger('square_meters')->unsigned()->nullable()->default(1);
            $table->string('cover')->nullable();
            $table->string('cover_original_name')->nullable();
            $table->boolean('visible')->nullable();
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
        Schema::dropIfExists('flats');
    }
}
