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
            $table->date('date');
            $table->text('description');
            $table->integer('duration');
            $table->string('image');
            $table->string('location');
            $table->string('title');
            $table->string('prix');
            $table->boolean("is_accepted")->default(false);
            $table->unsignedBigInteger('user_id'); // Add user_id column
            $table->softDeletes();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
