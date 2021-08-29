<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkHTantanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_h_tantangan', function (Blueprint $table) {
            $table->id('id_link');
            $table->tinyInteger('id_bahasa');
            $table->string('basic');
            $table->string('inter');
            $table->string('pro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_h_tantangan');
    }
}
