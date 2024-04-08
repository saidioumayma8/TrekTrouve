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
        Schema::create('expeditionorganizers', function (Blueprint $table) {
            $table->id();
            $table->string('contactinfo');
            $table->text('description');
            $table->string('image');
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('excursion', function (Blueprint $table) {
            $table->unsignedBigInteger('organizer_id'); // Add organizer_id column
            $table->foreign('organizer_id')->references('id')->on('expeditionorganizers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expeditionorganizer');
    }
};
