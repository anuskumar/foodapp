<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dishes_category');
            $table->unsignedBigInteger('dishes_subcategory');
            $table->unsignedBigInteger('dishes_food_type');
            $table->string('dishes_name');
            $table->string('dishes_image')->nullable();
            $table->string('dishes_description')->nullable();
            $table->unsignedBigInteger('dishes_added_by');
            $table->foreign('dishes_added_by')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('dishes_category')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
            $table->foreign('dishes_subcategory')
            ->references('id')
            ->on('subcategories')
            ->onDelete('cascade');
            $table->foreign('dishes_food_type')
            ->references('id')
            ->on('food_types')
            ->onDelete('cascade');
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
        Schema::dropIfExists('dishes');
    }
}
