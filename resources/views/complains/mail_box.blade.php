@extends('layouts.master')

@section('content')
    @include('admin.space')

        <h2 style="color: lightslategrey; padding-left: 50px;">
           Write a Reply <i class="fa fa-reply" aria-hidden="true"></i>
        </h2>
        <br>
            <div class="panel panel-default" style="margin-left: 50px;width: 1250px;background-color: #c9cbe5">
                <div class="panel-body">
                    <ul class="list-group">
                        <p><strong style="color: blue">{{$data->user->email}}</strong> Complained about <strong style="color: blue">{{$data->prod_id}}</strong> :</p>
                        <hr>
                        <li class="list-group-item" style="color: #001a35;background-color: #a3a8ed;">
                            <strong>{{$data->detail_text}}</strong>
                        </li>
                        <span  class="badge" style="background-color: darkblue;height: 20px;display: block; float: right;margin-top: 10px;"><strong style="color: lightgrey">{{$data->created_at->diffForhumans()}}</strong></span>
                        @if($data->complain_status=="open")
                            <span class="badge" style="background-color: darkgreen; height: 20px;display: block; float: right;margin-top: 10px;">Complain Status: {{$data->complain_status}}</span>
                        @elseif($data->complain_status=="closed")
                            <span class="badge" style="background-color: darkred; height: 20px;display: block; float: right;margin-top: 10px;">Complain Status: {{$data->complain_status}}</span>
                        @endif
                    </ul>
                </div>
            </div>

                <ul class="list-group" style="margin-top: -20px;">
                    <hr>
                    <li class="list-group-item" style="color: #001a35;background-color: #98AFC7;width: 1250px;margin-left: 50px;">
                        {!!Form::model($data, ['method'=>'PATCH','action'=>['ComplainController@reply',$data->id]]) !!}
                        {{ csrf_field() }}
                        <div class="form-group row" style="padding-left: 10px; padding-right: 10px;">
                            <label for="reply" class="col-1 col-form-label">Reply :</label>
                            <textarea class="form-control" name ="reply" rows= "1" type="text" placeholder="Enter Reply" required></textarea>
                            <button style="display: block; float: right;height: 40px;margin: 10px 2px -15px 0px; width: 60px;" type="submit" class="btn btn-primary" aria-label="Reply">Reply</button>
                        </div>
                        {!! Form::close() !!}
                    </li>
                    <hr>
                </ul>
@endsection