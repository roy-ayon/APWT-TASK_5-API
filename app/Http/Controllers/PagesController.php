<?php

namespace App\Http\Controllers;
use App\Models\Flatowner;
use App\Models\Advertisement;
use App\Models\Usertable;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function flatOwnerDash(){
        return view('pages.flatownerDash');
    }
    public function flatOwnerProfileUpdate(Request $request){
        $this->validate(
            $request,
            [
                'flatowner_name'=>'required',
                'flatowner_address'=>'required',
                'flatowner_phone'=>'required',
                'flatowner_gender'=>'required',
                'flatowner_nid'=>'required',
                'flatowner_dob'=>'required',
                'user_id'=>'required'
            ]
        );

        $flat = new Flatowner();
        $flat->bachelor_name = $request->flatowner_name;
        $flat->bachelor_address = $request->flatowner_address;
        $flat->bachelor_phone = $request->flatowner_phone;
        $flat->bachelor_gender = $request->flatowner_gender; 
        $flat->bachelor_nid = $request->flatowner_nid;
        $flat->bachelor_dob = $request->flatowner_dob;
        
        $flat->user_id = $request->user_id;
        $flat->save();


        return "ok";

    }

    public function adminDash(){
        return view('pages.adminDash');
    }
    public function bachelorDash(){
        return view('pages.bachelorDash');
    }
    public function managerDash(){
        return view('pages.managerDash');
    }
    public function advertisement(){
        return view('pages.advertisement');
    }
    public function advertisementCheck(Request $request){
        $this->validate(
            $request,
            [
                'address'=>'required',
                'houseno'=>'required',
                'floorno'=>'required',
                'flatinfo'=>'required',
                'rent'=>'required',
                'select'=>'required'
            ]
        );

        $user = new Advertisement();
        $user->address = $request->address;
        $user->houseno = $request->houseno;
        $user->floorno = $request->floorno;
        $user->flatinfo = $request->flatinfo;
        $user->rent = $request->rent;
        $user->status = $request->select;
        $user->permission = "Pending";
        $user->save();


        return redirect()->back()->with('status','Post Add Successfully');
    }
    public function advertisementlist(){
        $advertisements = Advertisement::all();
        return view('pages.advertisementlist',compact('advertisements'));
    }

    public function advertisementdetails($id){
        $advertisements = Advertisement::find($id);
        return view('pages.advertisementdetails')->with('advertisements',$advertisements);
    }
    public function advertisementedit($id){
        $advertisements = Advertisement::find($id);
        return view('pages.advertisementedit')->with('advertisements',$advertisements);
    }

    public function advertisementupdate(Request $request, $id){
        $this->validate(
            $request,
            [
                'address'=>'required',
                'houseno'=>'required',
                'floorno'=>'required',
                'flatinfo'=>'required',
                'rent'=>'required'
            ]
        );

        
        $advertisements = Advertisement::find($id);
        $advertisements->address = $request->address;
        $advertisements->houseno = $request->houseno;
        $advertisements->floorno = $request->floorno;
        $advertisements->flatinfo = $request->flatinfo;
        $advertisements->rent = $request->rent;
        $advertisements->update();


        return redirect()->back()->with('status','Update Successfully');
    }
    public function advertisementdelete($id)
    {
        $advertisements = Advertisement::find($id);
        return view('pages.advertisementdelete')->with('advertisements',$advertisements);
    }
    public function advertisementdel($id)
    {
        $advertisements = Advertisement::destroy($id);
        if($advertisements){
            return redirect()->back()->with('status','Delete Successfully');
        }

    }

    public function changeinfo(){
        return view('pages.changepasswordemail');
    }

    public function changeinfoupdate($id)
    {
        $user = Usertable::where('user_id',$id)->first();
        return view('pages.changeinfoupdate')->with('user',$user);
    }
    
   public function ApiList(){
       return Advertisement::all();
   }

   public function ApiPost(Request $req){
    $user = new Advertisement();
    $user->address = $req->address;
    $user->houseno = $req->houseno;
    $user->floorno = $req->floorno;
    $user->flatinfo = $req->flatinfo;
    $user->rent = $req->rent;
    $user->status = $req->status;
    $user->permission = $req->permission;
    $user->save();
    return "Post Add Successfully";
   }
     
}
