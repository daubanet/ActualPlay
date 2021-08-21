<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('player_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_4689331')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('player_id');
            $table->foreign('player_id', 'player_id_fk_4689331')->references('id')->on('players')->onDelete('cascade');
        });
    }
}
