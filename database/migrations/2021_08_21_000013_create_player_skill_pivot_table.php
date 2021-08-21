<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerSkillPivotTable extends Migration
{
    public function up()
    {
        Schema::create('player_skill', function (Blueprint $table) {
            $table->unsignedBigInteger('player_id');
            $table->foreign('player_id', 'player_id_fk_4689358')->references('id')->on('players')->onDelete('cascade');
            $table->unsignedBigInteger('skill_id');
            $table->foreign('skill_id', 'skill_id_fk_4689358')->references('id')->on('skills')->onDelete('cascade');
        });
    }
}
