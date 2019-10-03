<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('source_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('user_id');
            $table->integer('category_id');
            $table->text('description');
            $table->string('quantity');
            $table->string('unit');
            $table->date('valid_date');
            $table->integer('remark')->default(0);
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
        Schema::dropIfExists('source_requests');
    }
}
