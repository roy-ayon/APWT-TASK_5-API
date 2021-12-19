@if(Session::get('user_id')) {{Session::get('user_id')}} 
        <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif