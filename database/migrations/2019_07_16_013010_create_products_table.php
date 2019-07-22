<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');
            $table->integer('seo_id')->nullable();
            $table->integer('supplier_id')->nullable();
            $table->string('name');
            $table->string('sku');
            $table->string('url');
            $table->text('image_path')->nullable();

            $table->string('unit')->nullable();  // 产品出售的单位,比如一个, 一打, Carton等等. 默认是一个
            $table->unsignedSmallInteger('min_order')->default(0);

            $table->boolean('is_promote')->default(false);
            $table->boolean('is_display')->default(true);

            // 目录的排序
            $table->unsignedSmallInteger('position')->default(0);

            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
