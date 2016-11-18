@extends('layouts.app')
<?php

    $user = \Auth::user();
    $resources = \App\Resource::all();

?>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" id="container_resource">
                        <div><span class="name">{{$resource->type}}</span></div>
                        <form action="{{ url("/resources/destroy")}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type="hidden" value="{{$resource->id}}" name="id">
                            <button type="submit" class="btn-delete" name="delete">
                                <i class="material-icons">&#xE872;</i>
                                Delete {{$resource->type}}
                            </button>
                        </form>
                    </div>
                    <div class="panel-body">
                        <form id="profileform" class="form-horizontal" role="form" method="POST" action='{{ url("/resources/update")}}' enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ppicture" class="col-md-4 control-label">Product Picture</label>
                                <div class="col-md-6">
                                    <img src="../images\{{$resource->img}}" width="80px" height="80px" style="margin-bottom: 10px">
                                    <input name="resource" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Product Name</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="{{$resource->type}}" name="type"></input>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-6">
                                    <input class="form-control" placeholder="{{$stock->quantity}}" name="quantity"></input>
                                </div>
                            </div>
                            <input type="hidden" value="{{$resource->id}}" name="id">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">                      
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