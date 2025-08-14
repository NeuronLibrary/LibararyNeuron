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
        Schema::create('tb_roles', function (Blueprint $table) {
            $table->id('rl_id');
    $table->string('rl_name');
    $table->bigInteger('created_by')->unsigned()->nullable();
    $table->bigInteger('updated_by')->unsigned()->nullable();
    $table->bigInteger('deleted_by')->unsigned()->nullable();
    $table->timestamps();
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
        Schema::dropIfExists('tb_roles');
    }
};
