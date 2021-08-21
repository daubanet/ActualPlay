<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('sex')->nullable();
            $table->string('occupation')->nullable();
            $table->string('age')->nullable();
            $table->string('income')->nullable();
            $table->string('savings')->nullable();
            $table->string('nationality')->nullable();
            $table->string('residence')->nullable();
            $table->integer('str')->nullable();
            $table->integer('dex')->nullable();
            $table->integer('int')->nullable();
            $table->integer('idea')->nullable();
            $table->integer('con')->nullable();
            $table->integer('app')->nullable();
            $table->integer('pow')->nullable();
            $table->integer('luck')->nullable();
            $table->integer('siz')->nullable();
            $table->integer('san')->nullable();
            $table->integer('edu')->nullable();
            $table->integer('know')->nullable();
            $table->string('schools')->nullable();
            $table->string('degrees')->nullable();
            $table->string('damage')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
