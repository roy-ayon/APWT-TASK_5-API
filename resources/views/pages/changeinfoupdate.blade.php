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
		                    
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        @if (session('status'))
                        <h6 class="alert alert-success">{{session('status')}}</h6>
                        @endif

                        <form action="/flatOwner/ChangeInfoupdate/{id}" method="post">
                        {{csrf_field()}}
                                <label for="user_email" class="col-form-label">Email:</label> 
                                <div class="col-8">
                                <input id="user_email" name="user_email" value="{{$user['user_email']}}" class="form-control here" type="email">
                                </div>
                              <label for="user_password" class="col-4 col-form-label">Password :</label> 
                                <div class="col-8">
                                <input id="user_password" name="user_password" value="{{$user['user_password']}}" class="form-control here" type="email">
                                  @error('user_email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
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