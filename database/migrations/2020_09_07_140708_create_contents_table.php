<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('text');
            $table->boolean('bold')->default(false);
            $table->boolean('italics')->default(false);
            $table->boolean('strikethrough')->default(false);
            $table->boolean('createlinks')->default(false);
            $table->boolean('centertext')->default(false);
            $table->boolean('h1')->default(false);
            $table->boolean('h2')->default(false);
            $table->boolean('h3')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
