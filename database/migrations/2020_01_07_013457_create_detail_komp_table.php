<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKompTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_komp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_komp4');
            $table->integer('id_detail_komp');
            $table->string('t_detail_komp');
            $table->integer('tahun');
            $table->timestamps();
        });

        DB::update("ALTER TABLE detail_komp AUTO_INCREMENT = 1000000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_komp');
    }
}
