@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <label class="col-md-4"><h1>Username</h1></label>
                        <label class="col-md-4"><h1>Email</h1></label>
                        <label class="col-md-4"><h1>Role Name</h1></label>
                        @foreach ($users as $user)
                            <div>
                                <label class="col-md-4">{{$user->name}}</label>
                                <label class="col-md-4">{{$user->email}}</label>
                                <label class="col-md-4">
                                    <select>
                                    <option>{{$user->role_name}}</option>
                                    @foreach ($roles as $role)
                                        @if ($role->name != $user->role_name)
                                            <option>{{$role->name}}</option>
                                        @endif
                                    @endforeach
                                <!--<label class="col-md-4">{{$user->role_name}}</label>-->
                                </select>
                                </label>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
