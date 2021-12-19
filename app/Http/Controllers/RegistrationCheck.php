<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usertable;

class RegistrationCheck extends Controller
{
    //
    public function registration(){
        return view('pages.registration');
    }
    
    public function registrationCheck(Request $request){
        $this->validate(
            $request,
            [
                'useremail'=>'required|email',
                'userpassword'=>'required',
                'com_password'=>'required|same:userpassword',
                'select'=>'required'
            ]
        ); 

        $user = new Usertable();
        $user->user_email = $request->useremail;
        $user->user_password = $request->userpassword;
        $user->user_type = $request->select;
        $user->save();
        return redirect()->back()->with('status','Registration Successfully Completed');
        


        
    }
}
