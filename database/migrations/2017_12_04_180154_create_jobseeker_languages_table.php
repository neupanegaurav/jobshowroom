<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekerLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_languages', function (Blueprint $table) {
            $table->increments('janguage_id');
            $table->integer('jobseeker_id');
            $table->string('jlanguage_name');
            $table->string('jlanguage_readinglevel');
            $table->string('jlanguage_listeninglevel');
            $table->string('jlanguage_writinglevel');
            $table->string('jlanguage_speakinglevel');

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
        Schema::dropIfExists('jobseeker_languages');
    }
}
