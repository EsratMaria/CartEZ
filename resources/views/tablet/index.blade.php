@extends('layouts.master1')

@section('content')
    @if(Session::has('deleted_item'))
        <div class="alert alert-danger" role="alert">
            {{Session('deleted_item')}}
        </div>
    @endif
    @if(Session::has('updated_item'))
        <div class="alert alert-info" role="alert">
            {{Session('updated_item')}}
        </div>
    @endif
    @if(Session::has('created_item'))
        <div class="alert alert-success" role="alert">
            {{Session('created_item')}}
        </div>
    @endif
    <div class="row" style="padding-left: 70px;padding-right: 70px;">
        <h2 style="font-size: 28px;color: lightslategrey;">Tablets collection
            <a href="tablet/create"><span class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" data-original-title="Add more Products"></span></a>
            <a href="/products"><span class="glyphicon glyphicon-circle-arrow-left"  data-toggle="tooltip" data-original-title="Back to choosing products" style="color: red;"></span></a>
        </h2>
        <hr>
        @if(count($items)!=0)
            @foreach($items as $item)
                <div class="col-md-4">
                    <div class="thumbnail">

                        <a href="#">

                            <img  src="images\{{$item->img_loc}}"  style="width:80px;height: 160px;">

                            <div class="caption">
                                <h4 class="text-center">{{$item->title}}</h4>
                                <p class="text-center">{{$item->price}} Tk</p>
                            </div>
                        </a>
                        </a>

                        <div class="text-center" style="margin-bottom: 50px;">

                            <div style="padding-left: 110px; ">
                                {!!Form::model($item,['method'=>'GET','action'=>['TabletController@edit',$item->item_id]]) !!}
                                {{ csrf_field() }}
                                <button  type="submit" class="btn btn-info col-xs-4" style="margin-right:10px; "><i class="fa fa-edit" style="color: white;" data-toggle="tooltip" data-original-title="Edit"></i>Edit</button>
                                {!! Form::close() !!}
                            </div>
                            <div>
                                {!!Form::model($item,['method'=>'DELETE','action'=>['TabletController@destroy',$item->item_id]]) !!}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger col-xs-3"><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" data-original-title="Delete"> </i>Delete</button>
                                {!! Form::close() !!}
                            </div>

                        </div>
                    </div>

                </div>

            @endforeach
        @else
            <h4 style="color: red;padding-left: 50px;">Coming soon! Please keep browsing.</h4>
        @endif
    </div>
@endsection
