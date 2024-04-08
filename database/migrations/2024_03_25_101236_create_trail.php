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
        if (!Schema::hasTable('trail')) { // Check if the table exists before creating it
            Schema::create('trail', function (Blueprint $table) {
                $table->id();
                $table->string('Name');
                $table->integer('difficultylevel');
                $table->string('endpoint');
                $table->string('startpoint');
                $table->integer('length');
                $table->unsignedBigInteger('excursion_id'); // Add excursion_id column
                $table->timestamps();
                $table->foreign('excursion_id')->references('id')->on('excursion')->onDelete('cascade');
            });
        }
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trail');
    }
};
