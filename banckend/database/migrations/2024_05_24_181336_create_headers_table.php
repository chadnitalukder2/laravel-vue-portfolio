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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_title');
            $table->text('short_desc')->nullable();
            $table->string('image')->default('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnRba0yhjuus0apDsjQjLkNyV6y4xVsxoyn0IXOOfSqrh0OUQcsPeih9P2S6gR1PbvoEc&usqp=CAU');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('headers');
    }
};
