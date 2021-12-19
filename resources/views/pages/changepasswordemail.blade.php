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

                        <form action=" " method="post">
                        {{csrf_field()}}
                                <label for="user_email" class="col-form-label">User_id:</label> 
                                <div class="col-8">
                                <input id="user_email" name="user_email" value="{{Session::get('user_id')}}" class="form-control here" type="email" disabled>
                                </div>
                             
                              </div>
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                <td><a href="/flatOwner/ChangeInfoupdate/{{Session::get('user_id')}}" style="color: #fff" class="btn btn-primary">Find</a></td>
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