<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('property_id');
            $table->dateTime('check_in_date');
            $table->dateTime('check_out_date');
            $table->decimal('advance_payment', 10, 2);
            $table->integer('number_of_people')->nullable();

             // Foreign key constraints
             $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
             $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
