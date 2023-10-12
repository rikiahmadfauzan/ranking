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
        Schema::create('layout2s', function (Blueprint $table) {
            $table->id();
            $table->string('kd_teknisi',20);
            $table->string('nama',50);
            $table->string('closing',100);
            $table->timestamps();
            // $table->foreign('kd_teknisi')->references('kd_teknisi')->on('ranks')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layout2s');
    }
};
