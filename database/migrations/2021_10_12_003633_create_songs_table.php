<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('artist_id')->nullable();
            $table->bigInteger('video_id')->nullable();
            $table->string('featuring')->nullable();
            $table->string('music')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->longText('message')->nullable();
            $table->string('title')->nullable();
            $table->string('producer')->nullable();
            $table->string('pcontact')->nullable();
            $table->bigInteger('download_count')->nullable();
            $table->bigInteger('views')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('songs');
    }
}
