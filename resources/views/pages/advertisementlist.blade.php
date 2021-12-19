@extends('layouts.app')
@if(Session::get('user_id')) 

@section('content')
<div>
	<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="{{route('flatOwnerDash')}}" class="list-group-item list-group-item-action ">Dashboard</a>
              <a href="{{route('advertisement')}}" class="list-group-item list-group-item-action">Advertisement</a>
              <a href="{{route('advertisementlist')}}" class="list-group-item list-group-item-action active">Advertisement List</a>
              <a href="/flatOwner/ChangeInfo" class="list-group-item list-group-item-action" >Change Login Info.</a>
              <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
              
              
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>List</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
                        <table class="table table-striped table-bordered zero-configuration text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Address</th>
                                    <th>Houseno</th>
                                    <th>Floor NO</th>
                                    <th>Flat NO</th>
                                    <th>Rent</th>
                                    <th>Status</th>
                                    <th>Permission</th>
                                    <th>Details</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($advertisements as $advertisement)
                                <tr>
                                    <td>{{$advertisement['id']}}</td>
                                    <td>{{$advertisement['address']}}</td>
                                    <td>{{$advertisement['houseno']}}</td>
                                    <td>{{$advertisement['floorno']}}</td>
                                    <td>{{$advertisement['flatno']}}</td>
                                    <td>{{$advertisement['rent']}}</td>
                                    <td>{{$advertisement['status']}}</td>
                                    <td>{{$advertisement['permission']}}</td>
                                    <td><a href="/flatOwner/advertisement/details/{{$advertisement->id}}" style="color: #fff" class="btn btn-primary">Details</a></td>
                                    <td><a href="/flatOwner/advertisement/edit/{{$advertisement->id}}" style="color: #fff" class="btn btn-success">Edit</a></td>
                                    <td><a href="/flatOwner/advertisement/delete/{{$advertisement->id}}" style="color: #fff" class="btn btn-danger">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
</div>
@endsection

@endif