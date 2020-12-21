<?php

namespace TeamBravo\userInformation\Http\Controllers;
//namespace TeamBravo\userInformation\Models;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TeamBravo\userInformation\Models\Userinformation;
use Config\AppUserInformation;
class UserController extends Controller{

    public function index(){
        
        //$Email = config('AppUserInformation.softwareEngineer_email');
        $Email = config('AppUserInformation.softwareEngineer_email');
        return view('userInformation::userCreate',compact('Email'));
    }
    public function saveUserInfo(Request $request){
       $userInfo = new Userinformation();
       $userInfo->user_type =$request->user_type;
       $userInfo->user_name = $request->user_name;
       $userInfo->user_email =$request->user_email;
       $userInfo->user_contact = $request->user_contact;
       $userInfo->user_school = $request->user_school;
       $userInfo->user_college = $request->user_college;
        
       $userInfo->user_university = $request->user_university;
        $userInfo->user_present_address = $request->user_present_address;
        $userInfo->user_permanent_address = $request->user_permanent_address;
        $userInfo->user_profession = $request->user_profession;
        $userInfo->save();
        return "<h1>User Info is saved!</h1>";
    }


}