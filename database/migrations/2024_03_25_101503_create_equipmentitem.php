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
        Schema::create('equipment_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('excursion_id');
            $table->string('availability');
            $table->string('name');
            $table->integer('price');
            $table->string('type');
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
        Schema::dropIfExists('equipmentitem');
    }
};
