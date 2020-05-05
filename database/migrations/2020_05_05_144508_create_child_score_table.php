<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_score', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date')->comment('日付');
            $table->integer('score')->comment('獲得点数');
            $table->integer('to_do_id')->comment('行ったtodoリスト');
            $table->integer('chaild_id')->comment('子供');
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
        Schema::dropIfExists('child_score');
    }
}
