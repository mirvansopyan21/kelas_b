<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAspekPenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspek_penilaian', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('id_kategori');
            $table->text('uraian');
            $table->unsignedInteger('tipe_penilaian');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::table('aspek_penilaian', function (Blueprint $table) {
            $table->index(['id_kategori', 'tipe_penilaian']);
            $table->foreign('id_kategori')
                     ->references('id')
                     ->on('kategori')
                     ->onUpdate('cascade');
            $table->foreign('tipe_penilaian')
                     ->references('id')
                     ->on('tipe_penilaian')
                     ->onUpdate('cascade');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aspek_penilaian');
    }
}
