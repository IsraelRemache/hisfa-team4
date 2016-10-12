@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile Page</div>

                <div class="panel-body">
                  <form id="profileform" class="form-horizontal" role="form" method="POST" action=" ">
                      <div class="form-group">
                          <label for="ppicture" class="col-md-4 control-label">Profile Picture</label>
                          <div class="col-md-6">
                              <input  type="file">
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="name" class="col-md-4 control-label">Name</label>
                          <div class="col-md-6">
                              <input id="email" type="text" class="form-control" name="name" value="{{Auth::user()->name}} " required autofocus>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="password" class="col-md-4 control-label">Password</label>
                          <div class="col-md-6">
                              <input id="email" type="password" class="form-control" name="password" value="" required autofocus>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="email" class="col-md-4 control-label">Email</label>
                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{Auth::user()->email}} " required autofocus>
                          </div>
                      </div>
                      <div class="form-group">
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