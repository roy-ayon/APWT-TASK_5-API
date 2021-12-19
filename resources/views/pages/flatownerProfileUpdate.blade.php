@extends('layouts.app')
@if(Session::get('user_id')) 
        

@section('content')
<div>
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="{{route('flatOwnerDash')}}" class="list-group-item list-group-item-action active">Dashboard</a>
              <a href="{{route('advertisement')}}" class="list-group-item list-group-item-action">Advertisement</a>
              <a href="{{route('advertisementlist')}}" class="list-group-item list-group-item-action">Advertisement List</a>
              <a href="#" class="list-group-item list-group-item-action">Change Password</a>
              <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Profile Update</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        <form action="{{route('flatOwnerProfileUpdate')}} " method="post">
                              <div class="form-group row">
                              <label for="flatowner_image" class="col-4 col-form-label">Image :</label> 
                                <div class="col-8 offset-5 ">
                                <input id="flatowner_image" name="flatowner_image"  class="form-control here" type="file">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatowner_name" class="col-4 col-form-label">Name :</label> 
                                <div class="col-8">
                                  <input id="flatowner_name" name="flatowner_name"  class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatowner_address" class="col-4 col-form-label">Address :</label> 
                                <div class="col-8">
                                  <input id="flatowner_address" name="flatowner_address"   class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatowner_phone" class="col-4 col-form-label">Phone number :</label> 
                                <div class="col-8">
                                  <input id="flatowner_phone" name="flatowner_phone"  class="form-control here" type="tel">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatowner_gender" class="col-4 col-form-label">Gender :</label> 
                                <div class="col-8">
                                  <input id="flatowner_gender" name="flatowner_gender"   class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatowner_nid" class="col-4 col-form-label">NID :</label> 
                                <div class="col-8">
                                <input id="flatowner_nid" name="flatowner_nid"  class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatowner_dob" class="col-4 col-form-label">DOB :</label> 
                                <div class="col-8">
                                  <input id="flatowner_dob" name="flatowner_dob" class="form-control here" type="date">
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary" >Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection

@endif