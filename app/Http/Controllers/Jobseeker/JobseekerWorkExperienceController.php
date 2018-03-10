<?php

namespace App\Http\Controllers\Jobseeker;

use App\Model\Jobseeker\JobseekerInfo;
use App\Model\Jobseeker\JobseekerWorkExperience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class JobseekerWorkExperienceController extends Controller
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
                $userdetail = JobseekerWorkExperience::with('rel_jobseekerinfo.rel_user')->where('jobseeker_id',$jobseekerid)->get();
//                dd($userdetail);
                return view('jobseeker.workexperience')->with('jobs',$userdetail);
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


                return view('jobseeker.create.createworkexperience')->withId($jobseekerid);
            }else{
                return "you donot have permisssion to visit this page";
            }
        }else{
            return "unauthorized access";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $insert = new JobseekerWorkExperience();
        $insert->jobseeker_id = $request->jobseeker_id;
        $insert->jwork_organization = $request->organization;
        $insert->jwork_organizationtype = $request->organizationtype;
        $insert->jwork_location = $request->location;
        $insert->jwork_title = $request->title;
        $insert->jwork_level= $request->level;
        $insert->jwork_category = $request->category;
        $insert->jwork_datefrom = $request->datefrom;
        $insert->jwork_dateto = $request->dateto;
        $insert->jwork_details = $request->description;
        $insert->save();
//        return redirect('/educationinfo');
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
        $editexperience = JobseekerWorkExperience::find($id);
        return view('jobseeker.edit.editworkexperience')->with('edit',$editexperience);

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

        $update= JobseekerWorkExperience::find($id);
        $update->jwork_organization = $request->organization;
        $update->jwork_organizationtype = $request->organizationtype;
        $update->jwork_location = $request->location;
        $update->jwork_title = $request->title;
        $update->jwork_level= $request->level;
        $update->jwork_category = $request->category;
        $update->jwork_datefrom = $request->datefrom;
        $update->jwork_dateto = $request->dateto;
        $update->jwork_details = $request->description;
        $update->save();
        return redirect('/workexperience');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
