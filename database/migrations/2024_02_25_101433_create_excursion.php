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
        Schema::create('excursion', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->text('description');
            $table->integer('duration');
            $table->string('image');
            $table->string('location');
            $table->string('title');
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->unsignedBigInteger('trail_id'); // Add user_id column
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('trail_id')->references('id')->on('trail')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('excursion');
    }
};
