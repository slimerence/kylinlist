<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->integer('seo_id')->nullable();
            $table->integer('user_id');
            $table->integer('category_id')->nullable();
            $table->smallInteger('type')->nullable();
            $table->text('contact_person')->nullable();
            $table->text('contact_email')->nullable();
            $table->text('contact_number')->nullable();
            $table->text('avatar_path')->nullable();
            $table->text('link')->nullable();
            $table->text('street')->nullable();
            $table->text('street2')->nullable();
            $table->text('city')->nullable();
            $table->text('state')->nullable();
            $table->integer('post')->nullable();
            $table->text('country')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
