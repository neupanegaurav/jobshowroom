<?php

namespace App\Model\Jobseeker;

use Illuminate\Database\Eloquent\Model;

class JobseekerEducation extends Model
{
    protected $primaryKey='jeducation_id';
    public function rel_jobseekerinfo(){
        return $this->belongsTo('App\Model\Jobseeker\JobseekerInfo','jobseeker_id','jobseeker_id');
    }
}
