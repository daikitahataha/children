<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('todoリストタイトル');
            $table->integer('ctg_id')->comment('カテゴリ');
            $table->string('time')->comment('設定時間');
            $table->string('often')->comment('頻度');
            $table->integer('parent_id')->comment('親');
            $table->integer('status')->comment('0:　非公開, 1:　公開');
            $table->softDeletes();
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
        Schema::dropIfExists('to_do');
    }
}
