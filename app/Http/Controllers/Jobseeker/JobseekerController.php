<?php

namespace App\Http\Controllers\Jobseeker;
use App\Model\Jobseeker\JobseekerEducation;
use App\Model\Jobseeker\JobseekerInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;


class JobseekerController extends Controller
{
    public function overview(){
        if(Sentinel::check()){
            if(Sentinel::getuser()->roles()->first()->slug == 'jobseeker'){
                $userdetail = JobseekerInfo::with('rel_user')->where('user_id',Sentinel::getuser()->id)->first();
                $jobseeker_id = $userdetail->jobseeker_id;
                $educationdetail = JobseekerEducation::where('jobseeker_id',$jobseeker_id)->get();

                if(!$userdetail->marital_status){
                    $profilecomplete = 10;
                }else{
                    if(!$educationdetail){
                        $profilecomplete=20;

                    }else{
                        $profilecomplete=40;
                    }

                }
                return view('jobseeker.overview')->with('jobseekerdetail',$userdetail)
                                                        ->withProfile($profilecomplete);
            }
        }else{
            return "unauthorized access";
        }
    }
    public function profile(){
        if(Sentinel::check()){
            $userbasicinfo= JobseekerInfo::with('rel_user')->where('user_id',Sentinel::getuser()->id)->first();
            return view('jobseeker.my-profile')->with('jobseekerdetail',$userbasicinfo);

        }
    }
}
