<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('year')->nullable();
            $table->float('point')->nullable();
            $table->string('country')->nullable();
            $table->string('language')->nullable();
            $table->integer('age')->nullable();
            $table->integer('length')->nullable();
            $table->string('genre')->nullable();
            $table->date('release_at')->nullable();
            $table->string('directors')->nullable();
            $table->string('writers')->nullable();
            $table->integer('seen')->nullable();
            $table->integer('in_archive')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
}