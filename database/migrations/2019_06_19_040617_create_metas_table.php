<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type');
            $table->integer('target_id');
            $table->text('title')->nullable();
            $table->text('title_cn')->nullable();
            $table->text('keywords')->nullable();
            $table->text('keywords_cn')->nullable();
            $table->text('description')->nullable();
            $table->text('description_cn')->nullable();
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
        Schema::dropIfExists('metas');
    }
}
