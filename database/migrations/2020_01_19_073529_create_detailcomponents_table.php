<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailcomponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_components', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('detail_component');
            $table->unsignedBigInteger('components_id');
            $table->integer('vol');
            $table->string('satuan');
            $table->integer('harga_satuan');
            $table->integer('level');


            $table->foreign('components_id')->references('id')->on('components')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailcomponents');
    }
}
