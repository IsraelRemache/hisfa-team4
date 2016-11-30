@extends('layouts.app')
<?php

$user = \Auth::user();
$primes = \App\Prime::all();

?>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" id="container_resource">
                        <div><span class="name">{{$prime->name}}</span></div>
                        <form action="{{ url("/primes/destroy")}}" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                            <input type="hidden" value="{{$prime->id}}" name="id">
                            <button type="submit" class="btn-delete" name="delete">
                                <i class="material-icons">&#xE872;</i>
                                Delete {{$prime->name}}
                            </button>
                        </form>
                    </div>
                    <div class="panel-body">
                        <form id="profileform" class="form-horizontal" role="form" method="POST" action='{{ url("/primes/update")}}' enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Silo Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="cprimesiloname" value="{{$prime->name}}" class="input form-control" style="border: none;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Quantity (in kg)</label>
                                <div class="col-md-6">
                                    <input type="text" name="cprimesiloquantity" value="{{$prime->quantity}}" class="input form-control" style="border: none;">
                                </div>
                            </div>
                            <input type="hidden" value="{{$prime->id}}" name="id">
                            <input type="hidden" value="{{csrf_token()}}" name="_token">                      <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" name="changeprime" class="btn btn-primary">
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