<?php

namespace App\Http\Controllers;
use App\Models\Usertable;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // 
    public function login(){
        return view('pages.login');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                'useremail'=>'required|email',
                'userpassword'=>'required'
            ]
        ); 
        $user = Usertable::where('user_email',$request->useremail)
                            ->where('user_password',$request->userpassword)
                            ->first();
        if($user){
            if($user->user_type=="flatowner"){
                $request->session()->put('user_id',$user->user_id);
            return redirect()->route('flatOwnerDash');
            }
            elseif($user->user_type=="admin"){
                $request->session()->put('user_id',$user->user_id);
            return redirect()->route('adminDash');
            }
            elseif($user->user_type=="bachelor"){
                $request->session()->put('user_id',$user->user_id);
            return redirect()->route('bachelorDash');
            }
            elseif($user->user_type=="manager"){
                $request->session()->put('user_id',$user->user_id);
            return redirect()->route('managerDash');
            }
            
        }
        else
        {
            return redirect()->back()->with('status','Please Enter Valid Information');
        }
    }
    

    public function logout(){
        session()->flush();
        return redirect()->route('loginCheck');
    }
}
