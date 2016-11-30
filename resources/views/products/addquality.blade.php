@extends('layouts.app')
<?php

    $user = \Auth::user();
    $qualities = \App\Quality::all();
    $products = \App\Product::all();
    $lengths = \App\Length::all();
    

?>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <form id="profileform" class="form-horizontal" role="form" method="POST" action='{{ url("/qualities/addquality")}}' enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="col-md-4 control-label"></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Quality Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Quantity</label>
                                <div class="col-md-6">
                                    <input type="text" name="quantity">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Length</label>
                                <div class="col-md-6">
                                    <select name="selectlength">
                                        <option value="">Select a length
                                        </option>
                                        @foreach($lengths as $length)
                                            <option value="{{ $length->id }}">{{ $length->length }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" value="{{csrf_token()}}" name="_token">                      
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" name="add">
                                        Add
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