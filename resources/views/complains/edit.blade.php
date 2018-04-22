@extends('layouts.master')

@section('content')
    @include('admin.space')

    <div class="row">
        <div class="col-lg-20">

            <h2 style="color: lightslategrey; padding-left: 30px;">Edit Reply
                <i class="fa fa-reply" aria-hidden="true"></i></h2>
            {!!Form::model($data, ['method'=>'PATCH','action'=>['ComplainController@update_reply',$data->id]]) !!}
            <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1350px;">
                <label for="mail_text" class="col-2 col-form-label">Reply :</label>
                <textarea class="form-control" name ="mail_text" rows= "1" type="text" placeholder="Enter Reply" required></textarea>
            </div>
            <br/>
            <div class="form-group">
                <div class="col-lg-8 col-lg-offset-5">
                    <button class = 'btn btn-success' type="submit" style="width: 200px;">Update</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection