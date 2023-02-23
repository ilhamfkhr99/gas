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
        Schema::create('gambar_fitur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fitur')->nullable();
            $table->string('gambar');
            $table->timestamps();

            $table->foreign('id_fitur')->references('id')->on('fitur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gambar_fitur');
    }
};
