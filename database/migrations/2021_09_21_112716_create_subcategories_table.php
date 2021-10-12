<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('subcategory_name');
            $table->string('subcategory_image')->nullable();
            $table->unsignedBigInteger('subcategory_category');
            $table->unsignedBigInteger('subcategory_added_by');
            $table->timestamps();
            $table->foreign('subcategory_category')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');
            $table->foreign('subcategory_added_by')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
