<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeers', function (Blueprint $table) {
            $table->increments('employeer_id');
            $table->integer('user_id');
            $table->string('username');
            $table->string('employeers_type');
            $table->string('contact_no');
            $table->string('email');
            $table->string('logo_name');
            $table->string('banner_name');
            $table->integer('employeer_status');
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
        Schema::dropIfExists('employeers');
    }
}
