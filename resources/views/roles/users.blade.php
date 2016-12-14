@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <form action="{{ url("/roles/users")}}" method="post">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <label class="col-md-4"><h1>Username</h1></label>
                        <label class="col-md-4"><h1>Email</h1></label>
                        <label class="col-md-4"><h1>Role Name</h1></label>
                        @foreach ($users as $user)
                            <div>
                                <input type="hidden" value="{{$user->user_id}}" name="user_id">
                                <input type="hidden" value="{{$user->id}}" name="id">
                                <label class="col-md-4">{{$user->name}}</label>
                                <label class="col-md-4">{{$user->email}}</label>
                                <label class="col-md-4">
                                <select value="{{$user->role_id}}" name="role_id">
                                    <option value="{{$user->role_id}}">{{$user->role_name}}</option>
                                    @foreach ($roles as $role)
                                        @if ($role->name != $user->role_name)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                </label>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
            <input type="hidden" value="{{csrf_token()}}" name="_token">  
            <div class="form-group">
                <button type="submit" name="changerole" class="btn btn-primary">
                    Change
                </button> 
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
