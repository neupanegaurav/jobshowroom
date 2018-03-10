<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_trainings', function (Blueprint $table) {
            $table->increments('jtraining_id');
            $table->integer('jobseeker_id');
            $table->string('jtraining_name');
            $table->string('jtraining_institute');
            $table->string('jtraining_datefrom');
            $table->string('jtraining_dateto');
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
        Schema::dropIfExists('jobseeker_trainings');
    }
}
