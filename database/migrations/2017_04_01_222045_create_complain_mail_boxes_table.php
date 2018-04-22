<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplainMailBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complain_mail_boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('complain_id')->unsigned();
            $table->string('from');//user_id or admin
            $table->string('To');//user_id or admin
            $table->text('mail_text');
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
        Schema::drop('complain_mail_boxes');
    }
}
