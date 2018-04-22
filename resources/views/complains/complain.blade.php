@extends('layouts.master')

@section('content')
    @include('admin.space')
    @if(Session::has('deleted_complain'))
        <div class="alert alert-danger" role="alert">
            {{Session('deleted_complain')}}
        </div>
    @endif
    @if(Session::has('updated_complain'))
        <div class="alert alert-success" role="alert">
            {{Session('updated_complain')}}
        </div>
    @endif
    @if(Session::has('created_reply'))
        <div class="alert alert-info" role="alert">
            {{Session('created_reply')}}
        </div>
    @endif
    @if(Session::has('deleted_reply'))
        <div class="alert alert-danger" role="alert">
            {{Session('deleted_reply')}}
        </div>
    @endif
    @if(Session::has('updated_reply'))
        <div class="alert alert-success" role="alert">
            {{Session('updated_reply')}}
        </div>
    @endif

    @if(!count($data)==0)
        <h2 style="color: lightslategrey; padding-left: 50px;">
            Complains about the Products
            @if(Auth::user())
            <a href="{{route('complains.create')}}"><span class="glyphicon glyphicon-edit" data-toggle="tooltip" data-original-title="Edit"></span></a>
            @endif
        </h2>
        <br>
        @foreach($data as $row)
            <div class="panel panel-default" style="margin-left: 50px;width: 1250px;background-color: #c9cbe5">
                <div class="panel-body">
                    <ul class="list-group">

                        @if(Auth::user())

                        {!!Form::model($row,['method'=>'DELETE','action'=>['ComplainController@destroy',$row->id]]) !!}
                        {{ csrf_field() }}
                        <button style="display: block; float: right;height: 40px;margin: -1px -1px -1px -1px; width: 41px;" type="submit" class="btn btn-danger" aria-label="Delete">
                            <i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" data-original-title="Delete"></i>
                        </button>
                        {!! Form::close() !!}

                        {!!Form::model($row,['method'=>'GET','action'=>['ComplainController@edit',$row->id]]) !!}
                        {{ csrf_field() }}
                        <button style="display: block; float: right;height: 40px;margin: -1px -1px -1px -1px; width: 41px;" type="submit" class="btn btn-primary" aria-label="Reply">
                            <i class="fa fa-reply" aria-hidden="true" data-toggle="tooltip" data-original-title="Reply"></i>
                        </button>
                        {!! Form::close() !!}
                        @endif

                        <p><strong style="color: blue"><a href="/show_detail/{{$row->user_id}}">{{$row->user->email}}</a></strong> Complained about <strong style="color: blue">{{$row->prod_id}}</strong> :</p>
                        <hr>
                        <li class="list-group-item" style="color: #001a35;background-color: #a3a8ed;">
                            <strong>{{$row->detail_text}}</strong>
                        </li>
                        <hr>
                        <span  class="badge" style="background-color: darkblue;height: 20px;display: block; float: right;margin-top: -10px;"><strong style="color: lightgrey">{{$row->created_at->diffForhumans()}}</strong></span>
                        @if($row->complain_status=="open")
                            <span class="badge" style="background-color: darkgreen; height: 20px;display: block; float: right;margin-top: -10px;">Complain Status: {{$row->complain_status}}</span>
                        @elseif($row->complain_status=="closed")
                            <span class="badge" style="background-color: darkred; height: 20px;display: block; float: right;margin-top: 10px;">Complain Status: {{$row->complain_status}}</span>
                        @endif
                    </ul>
                </div>
            </div>
            <?php $a=$row->complain_mail_boxes;?>
            @if(count($a)!=0)
                @foreach($a as $reply)
                    <div class="panel panel-default" style="margin-left: 50px;width: 1250px;background-color: #BDE1EF;margin-top: -25px;border-bottom-color: black;">
                        <div class="panel-body">
                    <ul class="list-group">
                    @if(Auth::user())
                        @if($reply->from==Auth::user()->name)

                        {!!Form::model($reply,['method'=>'DELETE','action'=>['ComplainController@reply_destroy',$reply->id]]) !!}
                        {{ csrf_field() }}
                        <button style="display: block; float: right;height: 40px;margin: -1px -1px -1px -1px; width: 41px;" type="submit" class="btn btn-danger" aria-label="Delete">
                            <i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" data-original-title="Delete this reply"></i>
                        </button>
                        {!! Form::close() !!}

                        {!!Form::model($reply,['method'=>'GET','action'=>['ComplainController@edit_reply',$reply->id]]) !!}
                        {{ csrf_field() }}
                        <button type="submit" style="display: block; float: right;height: 40px;margin: -1px -1px -1px -1px; width: 41px;" class="btn btn-info" >
                            <i class="fa fa-edit" style="color:black;" data-toggle="tooltip" data-original-title="Edit"></i>
                        </button>
                        {!! Form::close() !!}

                            @endif
                        @endif

                        <p><strong style="color: blue">{{$reply->from}}</strong> replied to  <strong style="color: blue">{{$reply->To}}</strong> :</p>
                        <hr>
                        <li class="list-group-item" style="color: #001a35;background-color:#88BFD4;">
                            <strong>{{$reply->mail_text}}</strong>
                        </li>
                        <span  class="badge" style="background-color: darkblue;height: 20px;display: block; float: right;margin-top: 10px;"><strong style="color: lightgrey">{{$reply->created_at->diffForhumans()}}</strong></span>
                    </ul>
                        </div>
                    </div>
                @endforeach

                @endif
            <hr>
        @endforeach
    @else
        <h2 style="color: lightslategrey; padding-left: 80px;">There is no Complains about Products</h2>
    @endif
@endsection