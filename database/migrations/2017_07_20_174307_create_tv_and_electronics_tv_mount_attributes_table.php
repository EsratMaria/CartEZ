<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvAndElectronicsTvMountAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_and_electronics_tv_mount_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attribute');
            $table->string('display_name');
            $table->string('filter');
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
        Schema::dropIfExists('tv_and_electronics_tv_mount_attributes');
    }
}