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
            $table->increments('id');
            $table->string('name');
            $table->string('processor');
            $table->string('ram');
            $table->string('memory_speed');
            $table->string('hard_rive');
            $table->string('graphics_coprocessor');
            $table->string('chipset_brand');
            $table->string('number_usb');
            $table->string('brand_name');
            $table->string('model_number');
            $table->string('hardware_platform');
            $table->string('operating_ystem');
            $table->string('weight');
            $table->string('color');
            $table->string('processor_brand');
            $table->string('flash_memory');
            $table->string('battery_type')->nullable();
            $table->string('number_usb');
            $table->string('screen_size')->nullable();
            $table->string('screen_resolution')->nullable();
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('rate');
            $table->text('feature');
            $table->text('description');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
