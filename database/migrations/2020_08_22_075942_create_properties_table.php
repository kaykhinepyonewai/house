<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('codeno');
            $table->string('name');
            $table->text('mainphoto');
            $table->text('inphoto');
            $table->text('roomphoto');
            $table->integer('pricepermonth');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('township_id');
            $table->integer('bedroom_qty');
            $table->integer('bathroom_qty');
            $table->string('volume');
            $table->string('owner_name');
            $table->unsignedBigInteger('user_id');
            $table->string('phoneno');
            $table->string('address');
            $table->string('description');
            $table->string('status')->default('waiting');;
            $table->timestamps();


            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

            $table->foreign('township_id')
                    ->references('id')
                    ->on('townships')
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
        Schema::dropIfExists('properties');
    }
}
