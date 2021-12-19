@extends('layouts.app')
@if(Session::get('user_id'))
        

@section('content')
<div>
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="{{route('flatOwnerDash')}}" class="list-group-item list-group-item-action ">Dashboard</a>
              <a href="{{route('advertisement')}}" class="list-group-item list-group-item-action active">Advertisement</a>
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
		                    <h4>Advertisement Details</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form action="" method="get">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <label for="id" class="col-4 col-form-label">ID :</label> 
                                <div class="col-8">
                                <input id="id" name="id" value="{{$advertisements['id']}}" class="form-control here" type="text">
                                </div>
                              </div>
                              </div>
                              <div class="form-group row">
                                <label for="address" class="col-4 col-form-label">Address :</label> 
                                <div class="col-8">
                                  <input id="address" name="address" value="{{$advertisements['address']}}" class="form-control here" type="text">
                                  @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="houseno" class="col-4 col-form-label">House no :</label> 
                                <div class="col-8">
                                  <input id="houseno" name="houseno" value="{{$advertisements['houseno']}}" class="form-control here" type="text">
                                  @error('houseno')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="floorno" class="col-4 col-form-label">Floor no :</label> 
                                <div class="col-8">
                                <input id="floorno" name="floorno" value="{{$advertisements['floorno']}}" class="form-control here" type="text">
                                  @error('floorno')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatinfo" class="col-4 col-form-label">Flat Info :</label> 
                                <div class="col-8">
                                <input id="flatinfo" name="flatinfo" value="{{$advertisements['flatinfo']}}" class="form-control here" type="text">
                                  @error('flatinfo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="rent" class="col-4 col-form-label">Rent :</label> 
                                <div class="col-8">
                                  <input id="rent" name="rent" value="{{$advertisements['rent']}}" class="form-control here" type="text">
                                  @error('rent')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                              <label for="status" class="col-4 col-form-label">status :</label> 
                                <div class="col-8">
                                  <input value="{{$advertisements['status']}}" class="form-control here" type="text">
                                  @error('rent')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
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