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
        Schema::create('communitypost', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->dateTime('date');
            $table->string('image');
            $table->unsignedBigInteger('userid'); // Change to unsigned big integer
            $table->unsignedBigInteger('itemsid'); // Change to unsigned big integer
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('itemsid')->references('id')->on('equipment_item')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communitypost');
    }
};
