<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('name', 225)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('code')->nullable();
            $table->float('price', 10, 0)->nullable();
            $table->integer('availability')->nullable();
            $table->string('brend', 225)->nullable();
            $table->text('description')->nullable();
            $table->integer('is_new')->nullable();
            $table->integer('is_recommended')->nullable();
            $table->integer('status')->nullable();
            $table->text('color')->nullable();
            $table->timestamps();
            $table->text('img_1')->nullable();
            $table->text('img_2')->nullable();
            $table->text('img_3')->nullable();
            $table->text('img_4')->nullable();
            $table->text('img_5')->nullable();
            $table->text('img_6')->nullable();
            $table->text('img_7')->nullable();
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
