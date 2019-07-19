<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('kategori', 50);
            $table->unsignedInteger('tipe_penilaian');
            $table->timestamps();
        });

        Schema::table('kategori', function (Blueprint $table) {
           $table->index('tipe_penilaian');
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
        Schema::dropIfExists('kategori');
    }
}
