<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerOtherinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_otherinfos', function (Blueprint $table) {
            $table->increments('jother_id');
            $table->integer('jobseeker_id');
            $table->string('jother_location');
            $table->string('jother_preferlocation');
            $table->string('jother_2wheellicense');
            $table->string('jother_4wheellicense');
            $table->string('jother_2wheelown');
            $table->string('jother_4wheelown');
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
        Schema::dropIfExists('jobseeker_otherinfos');
    }
}
