<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->biginteger('kategori_id')->unsigned();
                    //foreign
                    $table->foreign('kategori_id')
                    ->references('id')
                    ->on('kategoris')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->biginteger('cabang_id')->unsigned();
                    //foreign
                    $table->foreign('cabang_id')
                    ->references('id')
                    ->on('cabangs')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('npa');
            $table->string('nama');
            $table->longText('alamat');
            $table->string('gambar');
            $table->string('tanggal_pengaduan');
            $table->enum('keterangan', ['pending', 'proses', 'selesai'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
