<?php

namespace App\Model\Jobseeker;

use Illuminate\Database\Eloquent\Model;

class JobseekerInfo extends Model
{
    protected $primaryKey='jobseeker_id';
    public function rel_user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function rel_education(){
        return $this->hasMany('App\Model\Jobseeker\JobseekerEducation','jobseeker_id','jobseeker_id');
    }
    public function rel_workexperience(){
        return $this->hasMany('App\Model\Jobseeker\JobseekerWorkExperience','jobseeker_id','jobseeker_id');
    }
}
