<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->string('title')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->bigInteger('artist_id')->nullable();
            $table->longText('message')->nullable();
            $table->string('featuring')->nullable();
            $table->string('username')->nullable();
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
        Schema::dropIfExists('videos');
    }
}
