<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignGamePivotTable extends Migration
{
    public function up()
    {
        Schema::create('campaign_game', function (Blueprint $table) {
            $table->unsignedBigInteger('campaign_id');
            $table->foreign('campaign_id', 'campaign_id_fk_4689383')->references('id')->on('campaigns')->onDelete('cascade');
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id', 'game_id_fk_4689383')->references('id')->on('games')->onDelete('cascade');
        });
    }
}
