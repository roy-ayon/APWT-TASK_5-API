@extends('layouts.app')

@section('content')
<div id="login">
        <div class="container" style="margin-top: 15%;">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        @if (session('status'))
                        <h6 class="alert alert-success">{{session('status')}}</h6>
                        @endif
                        <form class="form" action="{{route('loginCheck')}}" method="post">
                        {{csrf_field()}}
                        <h3 class="text-center text-info">Login</h3>
                            <div class="mb-3 form-group">
                                <label for="useremail" class="text-info">UserEmail:</label><br>
                                <input type="text" name="useremail" id="useremail" value="{{old('useremail')}}" class="form-control">
                                @error('useremail')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-group">
                                <label for="userpassword" class="text-info">Password:</label><br>
                                <input type="password" name="userpassword" id="userpassword" value="{{old('userpassword')}}" class="form-control">
                                @error('userpassword')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-group ">
                                <input type="submit" name="submit" class="btn btn-primary col-md-12 mx-auto" value="submit">
                            </div>
                            <div id="register-link" class="text-center">
                                <a href="{{route('registrationCheck')}}" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
