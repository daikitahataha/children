<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReputationSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reputation_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('表彰状タイトル');
            $table->string('description')->comment('表彰状の文章');
            $table->integer('status')->comment('0: 下書き保存, 1:送信済み');
            $table->integer('parent_id')->comment('作成した親');
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
        Schema::dropIfExists('reputation_sheets');
    }
}
