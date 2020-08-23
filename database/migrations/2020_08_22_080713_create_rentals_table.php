<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
           $table->id();
            $table->string('rentalno');
            $table->string('customer_name');
            $table->string('phoneno');
            $table->integer('rentalperiod');
            $table->date('plandate');
            $table->integer('totalprice');
            $table->unsignedBigInteger('property_id');
            $table->string('status')->default('request');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();


            $table->foreign('property_id')
                    ->references('id')
                    ->on('properties')
                    ->onDelete('cascade');

            $table->foreign('user_id')
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
        Schema::dropIfExists('rentals');
    }
}
