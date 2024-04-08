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
        Schema::create('safetyinformation', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('title');
            $table->unsignedBigInteger('excursion_id'); // Add excursion_id column
            $table->timestamps();
            $table->foreign('excursion_id')->references('id')->on('excursion')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('safetyinformation');
    }
};
