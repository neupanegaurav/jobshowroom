<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_references', function (Blueprint $table) {
            $table->increments('jreference_id');
            $table->integer('jobseeker_id');
            $table->string('jreference_name');
            $table->string('jreference_title');
            $table->string('jreference_organization');
            $table->string('jreference_email');
            $table->string('jreference_contact');
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
        Schema::dropIfExists('jobseeker_references');
    }
}
