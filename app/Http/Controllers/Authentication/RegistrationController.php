<?php

namespace App\Http\Controllers\Authentication;

use App\Model\Jobseeker\JobseekerInfo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;
use Illuminate\Support\Facades\DB;


class RegistrationController extends Controller
{
    public function registeruser(){
        return view('register');
    }
    public function jobseekerregister(Request $request){


        $user = Sentinel::registerAndActivate($request->all());
        $user_id = $user->id;

        $role = Sentinel::findRoleBySlug('jobseeker');
        $role= $role->users()->attach($user);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $insert = new JobseekerInfo();
        $insert->user_id = $user_id;
        $insert->name = $name;
        $insert->contact_no =$phone;
        $insert->save();
        $check = Sentinel::authenticate($request->all());
//            dd($check);
            return redirect('jobseeker/overview');

        }
        public function login(){
           return view('login');
        }
        public function loginuser(Request $request){
            $check = Sentinel::authenticate($request->all());

            if(Sentinel::getuser()->roles()->first()->slug == 'jobseeker'){
                return redirect('jobseeker/overview');
            }else{
                Sentinel::logout();
                return redirect('/');
            }
        }
}
