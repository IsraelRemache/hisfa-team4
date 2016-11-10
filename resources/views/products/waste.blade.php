@extends('layouts.app')
<?php

$user = \Auth::user();
$wastes = \App\Waste::all();

?>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$waste->name}}</div>

                    <div class="panel-body">
                        <form id="profileform" class="form-horizontal" role="form" method="POST" action='{{ url("/wastes/waste_$waste->id")}}' enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Silo Name</label>
                                <div class="col-md-6">
                                    <label class="form-control">{{$waste->name}}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-6">
                                    <label class="form-control">{{$waste->quantity}}</label>
                                </div>
                            </div>

                            <input type="hidden" value="{{csrf_token()}}" name="_token">                      <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Change
                                    </button>
                                    <button type="submit" class="btn btn-primary" name="delete">
                                        Delete {{$waste->name}}
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