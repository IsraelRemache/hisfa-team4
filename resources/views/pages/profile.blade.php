@extends('layouts.app')
<?php $user = \Auth::user();?>
@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Page</div>

                <div class="panel-body">
                  <form id="profileform" class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}" enctype="multipart/form-data">
                      <div class="form-group">
                          <div class="col-md-6">
                              <label class="col-md-4 control-label"></label>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="ppicture" class="col-md-4 control-label">Profile Picture</label>
                          <div class="col-md-6">
                              <img src="uploads\{{Auth::user()->img}}" width="80px" height="80px" style="margin-bottom: 10px">
                              <input name="picture" type="file">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="name" class="col-md-4 control-label">Username</label>
                          <div class="col-md-6">
                              <input id="email" type="text" class="form-control" name="name" value="{{Auth::user()->name}} " required autofocus>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="password" class="col-md-4 control-label">Password</label>
                          <div class="col-md-6">
                              <input id="email" type="password" class="form-control" name="password" value="">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="email" class="col-md-4 control-label">Email</label>
                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required autofocus>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <input type="checkbox" name="notifications"<?php if($user->notifications) {echo 'checked';}?>><label> Wilt u de notificaties in mail ontvangen?</label>
                          </div>
                      </div>
                      <input type="hidden" value="{{csrf_token()}}" name="_token">                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Change
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection