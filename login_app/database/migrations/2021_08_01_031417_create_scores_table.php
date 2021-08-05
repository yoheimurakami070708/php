<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // 実行
    public function up()
    {
            Schema::create('scores', function (Blueprint $table) {
                $table->string('title');
                $table->increments('time');
                $table->increments('page');
            });
        
    }

    /**
     * Reverse the migrationcs.
     *
     * @return void
     */
    // 削除
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
