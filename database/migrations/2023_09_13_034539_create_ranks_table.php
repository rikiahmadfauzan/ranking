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
        Schema::create('ranks', function (Blueprint $table) {
            $table->id();
            $table->string('kd_teknisi',20);
            $table->string('nama',50);
            $table->string('closing',100);
            $table->timestamps();
        });
        // $data = DB::table('buku')
        // ->join('kategori', 'buku.kategori_id', '=', 'kategori.kategori_id')
        // ->select('buku.judul', 'buku.deskripsi', 'kategori.deskripsi')
        // ->get();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ranks');
    }
};
