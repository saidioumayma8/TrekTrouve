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
            $table->date('date');
            $table->string('image');
            $table->string('title');
            $table->unsignedBigInteger('userid'); // Change to unsigned big integer
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
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
