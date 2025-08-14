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
        Schema::create('tb_detail_peminjaman', function (Blueprint $table) {
            $table->id('id_detail_peminjaman');
    $table->unsignedBigInteger('id_peminjaman');
    $table->bigInteger('id_buku')->unsigned();
    $table->date('tanggal_kembali')->nullable();
    $table->enum('status_kembali', ['belum', 'kembali']);
    $table->bigInteger('created_by')->unsigned()->nullable();
    $table->bigInteger('updated_by')->unsigned()->nullable();
    $table->bigInteger('deleted_by')->unsigned()->nullable();
    $table->timestamps();
    $table->softDeletes();
    $table->string('sys_note', 255)->nullable();

    $table->foreign('id_peminjaman')->references('id_peminjaman')->on('tb_peminjaman');
    $table->foreign('id_buku')->references('id_buku')->on('tb_buku');
    $table->foreign('created_by')->references('usr_id')->on('users');
    $table->foreign('updated_by')->references('usr_id')->on('users');
    $table->foreign('deleted_by')->references('usr_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detail_peminjaman');
    }
};
