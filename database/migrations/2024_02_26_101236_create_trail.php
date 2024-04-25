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
            $table->softDeletes();
                $table->timestamps();
                $table->foreignID('excursion_id')->constrained('excursion')->onDelete('cascade');

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
