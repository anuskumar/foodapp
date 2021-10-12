<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_restaurants');
            $table->unsignedBigInteger('menu_dish');
            $table->double('menu_price');
            $table->double('menu_selling_price');
            $table->smallInteger('menu_featured');
            $table->smallInteger('menu_todays_special');
            $table->smallInteger('menu_deliverable');
            $table->string('menu_description');
            $table->smallInteger('menu_available');
            $table->timestamps();
            $table->unsignedBigInteger('menu_added_by');
            $table->foreign('menu_added_by')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('menu_dish')
            ->references('id')
            ->on('dishes')
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
        Schema::dropIfExists('menus');
    }
}
