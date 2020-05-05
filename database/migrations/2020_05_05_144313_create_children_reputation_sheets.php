<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenReputationSheets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children_reputation_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('chaild_id')->comment('子供');
            $table->integer('sheet_id')->comment('表彰状');
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
        Schema::dropIfExists('children_reputation_sheets');
    }
}
