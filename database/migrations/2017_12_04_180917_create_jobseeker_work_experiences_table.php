<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_work_experiences', function (Blueprint $table) {
            $table->increments('jwork_id');
            $table->integer('jobseeker_id');
            $table->string('jwork_organization');
            $table->string('jwork_organizationtype');
            $table->string('jwork_location');
            $table->string('jwork_title');
            $table->string('jwork_category');
            $table->string('jwork_level');
            $table->string('jwork_datefrom');
            $table->string('jwork_dateto');
            $table->string('jwork_details');

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
        Schema::dropIfExists('jobseeker_work_experiences');
    }
}
