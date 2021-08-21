<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('value');
            $table->string('description')->nullable();
            $table->integer('start')->nullable();
            $table->boolean('is_checked')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
