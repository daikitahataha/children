<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToDoDoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_do_done', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('to_do_id')->comment('ToDoリスト');
            $table->integer('chaild_id')->comment('子供');
            $table->string('date')->commnet('行った日にち');
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
        Schema::dropIfExists('to_do_done');
    }
}
