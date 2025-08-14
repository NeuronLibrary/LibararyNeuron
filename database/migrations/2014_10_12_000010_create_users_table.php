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
        Schema::create('users', function (Blueprint $table) {
            $table->id('usr_id');
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->unsignedBigInteger('id_peminjaman')->nullable();
    $table->timestamps();
    $table->unsignedBigInteger('created_by')->nullable();   
    $table->bigInteger('updated_by')->unsigned()->nullable();
    $table->bigInteger('deleted_by')->unsigned()->nullable();
    $table->softDeletes();
    $table->string('sys_note', 200)->nullable();

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
        Schema::dropIfExists('users');
    }
};
