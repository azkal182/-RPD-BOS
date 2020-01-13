<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomp4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komp4', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_komp3');
            $table->integer('id_komp4');
            $table->string('t_komp4');
            $table->integer('tahun');
            $table->timestamps();
        });

        DB::update("ALTER TABLE komp4 AUTO_INCREMENT = 100000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komp4');
    }
}
