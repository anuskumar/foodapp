<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('restaurant_name');
            $table->string('restaurant_address');
            $table->float('restaurant_latitude');
            $table->float('restaurant_longitude');
            $table->float('restaurant_default_tax');
            $table->string('restaurant_email_id');
            $table->mediumInteger('restaurant_currency');
            $table->bigInteger('restaurant_contact_number');
            $table->string('restaurant_image')->nullable();
            $table->string('restaurant_description');
            $table->time('restaurant_opening_time');
            $table->time('restaurant_closing_time');
            $table->smallInteger('restaurant_avail_delivery');
            $table->smallInteger('restaurant_openclose_status');
            $table->smallInteger('restaurant_active_status');
            $table->unsignedBigInteger('restaurant_added_by');
            $table->foreign('restaurant_added_by')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('restaurants');
    }
}
