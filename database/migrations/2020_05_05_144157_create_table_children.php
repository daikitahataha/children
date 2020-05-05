<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableChildren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('名前');
            $table->string('avatar')->nullable()->comment('画像');
            $table->integer('parent_id')->comment('親');
            $table->integer('target_score')->comment('目標点数');
            $table->string('password')->comment('パスワード');
            $table->string('forgot_password_token')->nullable()->comment('token');
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
        Schema::dropIfExists('children');
    }
}
