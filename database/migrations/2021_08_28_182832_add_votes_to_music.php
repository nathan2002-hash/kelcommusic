<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToMusic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('music', function (Blueprint $table) {
            $table->bigInteger('download_count');
            $table->bigInteger('views');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('music', function (Blueprint $table) {
            $table->bigInteger('download_count');
            $table->bigInteger('views');
        });
    }
}
