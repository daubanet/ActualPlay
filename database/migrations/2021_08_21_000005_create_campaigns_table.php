<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->date('start');
            $table->date('end')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
