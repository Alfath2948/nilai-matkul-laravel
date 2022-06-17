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
        Schema::create('tb_ngambil', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ngambil_mhs_id')->references('id')->on('tb_mhs');
            $table->foreignId('ngambil_matkul_id')->references('id')->on('tb_matkul');
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ngambil');
    }
};
