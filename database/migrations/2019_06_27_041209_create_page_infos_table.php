<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('slug')->nullable();
            $table->text('slug_cn')->nullable();
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
        Schema::dropIfExists('page_infos');
    }
}
