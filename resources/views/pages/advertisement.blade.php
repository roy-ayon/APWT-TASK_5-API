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
              <a href="/flatOwner/ChangeInfo" class="list-group-item list-group-item-action" >Change Login Info.</a>
              <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Advertisement Post</h4>
		                    <hr>
		                </div>        
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        @if (session('status'))
                        <h6 class="alert alert-success">{{session('status')}}</h6>
                        @endif
		                    <form action="{{route('advertisement')}}" method="post">
                            {{csrf_field()}}
                              </div>
                              <div class="form-group row">
                                <label for="address" class="col-4 col-form-label">Address :</label> 
                                <div class="col-8">
                                  <input id="address" name="address" value="{{old('address')}}" class="form-control here" type="text">
                                  @error('address')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="houseno" class="col-4 col-form-label">House no :</label> 
                                <div class="col-8">
                                  <input id="houseno" name="houseno" value="{{old('houseno')}}" class="form-control here" type="text">
                                  @error('houseno')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="floorno" class="col-4 col-form-label">Floor no :</label> 
                                <div class="col-8">
                                  <input id="floorno" name="floorno" vlaue="{{old('floorno')}}" class="form-control here" type="tel">
                                  @error('floorno')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="flatinfo" class="col-4 col-form-label">Flat Info :</label> 
                                <div class="col-8">
                                  <textarea id="flatinfo" name="flatinfo" cols="40" rows="4" class="form-control"></textarea>
                                  @error('flatinfo')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="rent" class="col-4 col-form-label">Rent :</label> 
                                <div class="col-8">
                                  <input id="rent" name="rent" value="{{old('rent')}}" class="form-control here" type="text">
                                  @error('rent')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Status :</label> 
                                <div class="col-8">
                                  <select id="select" name="select" class="custom-select">
                                    <option value="available">available</option>
                                    <option value="not available">not available</option>
                                  </select>
                                </div>
                              </div>
                              </div> 
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary mx-auto">Post</button>
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