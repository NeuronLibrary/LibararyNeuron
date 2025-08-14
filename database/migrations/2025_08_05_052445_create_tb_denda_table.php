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
        Schema::create('tb_denda', function (Blueprint $table) {
            $table->id('id_denda');
    $table->bigInteger('id_detail_peminjaman')->unsigned();
    $table->decimal('jumlah_denda', 10, 2);
    $table->enum('status', ['belum', 'sudah']);
    $table->bigInteger('created_by')->unsigned()->nullable();
    $table->bigInteger('updated_by')->unsigned()->nullable();
    $table->bigInteger('deleted_by')->unsigned()->nullable();
    $table->timestamps();
    $table->softDeletes();
    $table->string('sys_note', 255)->nullable();

    $table->foreign('id_detail_peminjaman')->references('id_detail_peminjaman')->on('tb_detail_peminjaman');
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
        Schema::dropIfExists('tb_denda');
    }
};
