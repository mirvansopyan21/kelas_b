<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Books', function (Blueprint $table) {
           $table->string('nama', 100)->change();
           $table->renameColumn('author', 'pengarang');
           $table->string('penerbit', 100)->after('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Books', function (Blueprint $table) {
            //
        });
    }
}
