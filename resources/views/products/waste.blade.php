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
                    <div class="panel-heading" id="container_resource">
                        <div><span class="name">{{$waste->name}}</span></div>
                        <form action="{{ url("/wastes/destroy")}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type="hidden" value="{{$waste->id}}" name="id">
                            <button type="submit" class="btn-delete" name="delete">
                                <i class="material-icons">&#xE872;</i>
                                Delete {{$waste->name}}
                            </button>
                        </form>
                    </div>
                    <div class="panel-body">
                        <form id="profileform" class="form-horizontal" role="form" method="POST" action='{{ url("/wastes/update")}}' enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Silo Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="cwastesiloname" value="{{$waste->name}}" class="form-group form-control" style="border: none;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Quantity  (in kg)</label>
                                <div class="col-md-6">
                                    <input type="text" name="cwastesiloquantity" value="{{$waste->quantity}}" class="form-control form-group" style="border: none;">
                                </div>
                            </div>
                            <input type="hidden" value="{{$waste->id}}" name="id">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">                      <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" name="changewaste" class="btn btn-primary">
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