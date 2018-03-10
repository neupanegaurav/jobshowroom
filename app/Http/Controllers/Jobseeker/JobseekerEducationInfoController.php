<?php

namespace App\Http\Controllers\Jobseeker;

use App\Model\Jobseeker\JobseekerEducation;
use App\Model\Jobseeker\JobseekerInfo;
use App\Model\Jobseeker\JobseekerWorkExperience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Queue\Jobs\Job;
use Sentinel;

class JobseekerEducationInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Sentinel::check()){
            if(Sentinel::getuser()->roles()->first()->slug == 'jobseeker'){
                $jobseekerid = JobseekerInfo::where('jobseeker_id',Sentinel::getuser()->id)->first()->jobseeker_id;


                $userdetail = JobseekerEducation::with('rel_jobseekerinfo.rel_user')->where('jobseeker_id',$jobseekerid)->get();
//                dd($userdetail);

                    return view('jobseeker.education')->with('jobs',$userdetail);
            }else{
                return "you donot have permisssion to visit this page";
            }
        }else{
            return "unauthorized access";
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Sentinel::check()){
            if(Sentinel::getuser()->roles()->first()->slug == 'jobseeker'){
                $jobseekerid = JobseekerInfo::where('jobseeker_id',Sentinel::getuser()->id)->first()->jobseeker_id;

                return view('jobseeker.create.createducation')->withId($jobseekerid);
            }else{
                return "you donot have permisssion to visit this page";
            }
        }else{
            return "unauthorized access";
        }
//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $insert = new JobseekerEducation();
        $insert->jobseeker_id = $request->jobseeker_id;
        $insert->jeducation_graduationdate = $request->passedyear;
        $insert->jeducation_degree = $request->degree;
        $insert->jeducation_institute = $request->institute;
        $insert->jeducation_program = $request->program;
        $insert->jeducation_board= $request->board;
        $insert->jeducation_score = $request->score;
        $insert->save();
        return redirect('/educationinfo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editdetail = JobseekerEducation::find($id);
        $jobseekerid = JobseekerInfo::where('jobseeker_id',Sentinel::getuser()->id)->first()->jobseeker_id;
        return view('jobseeker.edit.editeducation')->with('editeducation',$editdetail)->withId($jobseekerid);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = JobseekerEducation::find($id);
//        $update->jobseeker_id = $request->jobseeker_id;
        $update->jeducation_graduationdate = $request->passedyear;
        $update->jeducation_degree = $request->degree;
        $update->jeducation_institute = $request->institute;
        $update->jeducation_program = $request->program;
        $update->jeducation_board= $request->board;
        $update->jeducation_score = $request->score;
        $update->save();
            return redirect('/educationinfo');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
