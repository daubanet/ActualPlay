<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToGamesTable extends Migration
{
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->unsignedBigInteger('campaign_id')->nullable();
            $table->foreign('campaign_id', 'campaign_fk_4688561')->references('id')->on('campaigns');
        });
    }
}
