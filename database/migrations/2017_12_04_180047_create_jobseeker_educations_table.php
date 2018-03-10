<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_educations', function (Blueprint $table) {
            $table->increments('jeducation_id');
            $table->integer('jobseeker_id');
            $table->string('jeducation_graduationdate');
            $table->string('jeducation_degree');
            $table->string('jeducation_institute');
            $table->string('jeducation_program');
            $table->string('jeducation_board');
            $table->string('jeducation_score');
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
        Schema::dropIfExists('jobseeker_educations');
    }
}
