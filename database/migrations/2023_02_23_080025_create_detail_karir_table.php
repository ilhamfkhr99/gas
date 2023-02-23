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
        Schema::create('detail_karir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_karir')->nullable();
            $table->timestamps();

            $table->foreign('id_karir')->references('id')->on('karir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_karir');
    }
};
