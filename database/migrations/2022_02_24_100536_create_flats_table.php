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
            $table->string('province', 3);
            $table->string('address', 100);
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->tinyInteger('room_number')->unsigned()->default(1);
            $table->tinyInteger('bed_number')->unsigned()->default(1);
            $table->tinyInteger('bathroom_number')->unsigned()->default(1);
            $table->smallInteger('square_meters')->unsigned()->default(1);
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
