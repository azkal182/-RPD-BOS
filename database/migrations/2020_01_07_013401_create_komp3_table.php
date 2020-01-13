<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomp3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komp3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_komp2');
            $table->integer('id_komp3');
            $table->string('t_komp3');
            $table->integer('tahun');
            $table->timestamps();
        });

        DB::update("ALTER TABLE komp3 AUTO_INCREMENT = 100000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komp3');
    }
}
