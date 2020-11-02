<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image_path');
            $table->integer('author_id');
            $table->integer('finish_number');
            $table->integer('commictitle_id');

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
        Schema::dropIfExists('commics');
    }
}
