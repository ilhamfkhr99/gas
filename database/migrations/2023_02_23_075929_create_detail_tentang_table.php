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
        Schema::create('detail_tentang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tentang_gas')->nullable();
            $table->string('manfaat');
            $table->timestamps();

            $table->foreign('id_tentang_gas')->references('id')->on('tentang_gas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_tentang');
    }
};
