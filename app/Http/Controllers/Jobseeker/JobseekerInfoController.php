<?php

namespace App\Http\Controllers\Jobseeker;

use App\Model\Jobseeker\JobseekerInfo;
use Foo\DataProviderIssue2833\SecondTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;

class JobseekerInfoController extends Controller
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
               $userdetail = JobseekerInfo::with('rel_user')->where('user_id',Sentinel::getuser()->id)->first();
               return view('jobseeker.basic_info')->with('jobseekerdetail',$userdetail);
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
        //
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
        $editjobseeker = JobseekerInfo::where('jobseeker_id',$id)->first();
        return view('jobseeker.edit.edit_jobseekeer_basic_info')->with('editinfo',$editjobseeker);
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


            $update = JobseekerInfo::where('jobseeker_id',$id)->first();

        $update->name = $request->name;
        $update->gender = $request->gender;
        $update->marital_status = $request->marital_status;
        $update->dob = $request->dob;
        $update->religion = $request->religion;
        $update->nationality = $request->nationality;
        $update->address = $request->current_address;
        $update->save();
        return redirect('/basicinfo');

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
