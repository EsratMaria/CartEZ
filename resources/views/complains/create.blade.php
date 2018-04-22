@extends('layouts.master')
@section('content')
    @include('admin.space')

    <h2 style="color: lightslategrey; padding-left: 10px;">
        Edit
    </h2>
    <br>
    <table class="table" style="margin-left:10px;">
        <thead class="thead-inverse" >
        <tr style="background-color: lightblue; ">
            <th >Id</th>
            <th>User ID</th>
            <th>Transaction ID</th>
            <th>Product ID</th>
            <th>Date Of Complain</th>
            <th >Complain Text</th>
            <th>Complain Status</th>
            <th>             </th>
            <th>Posted at</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if($com)
            @foreach($com as $complain)
                <tr>
                    <td>{{$complain->id}}</td>
                    <td>{{$complain->user_id}}</td>
                    <td>{{$complain->transactionhistory_id}}</td>
                    <td>{{$complain->prod_id}}</td>
                    <td>{{$complain->date_of_complain}}</td>
                    <td>{{$complain->detail_text}}</td>

                    {!!Form::model($complain, ['method'=>'PATCH','action'=>['ComplainController@update',$complain->id]]) !!}
                    <td>
                        <select  class="form-control" name="complain_status" style="background-color:lightgrey;color:darkblue;">
                            <option selected disabled hidden>{{$complain->complain_status}}</option>
                            <option value="open">open</option>
                            <option value="closed">closed</option>
                        </select>
                    </td>
                    <td>
                        <button type="submit"  class="btn btn-success"><i class="glyphicon glyphicon-save" data-toggle="tooltip" data-original-title="Save"></i></button>
                    </td>
                    {!! Form::close() !!}
                    <td>{{$complain->created_at->diffForhumans()}}</td>
                    <td>
                        {!!Form::model($complain,['method'=>'DELETE','action'=>['ComplainController@destroy',$complain->id]]) !!}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" aria-label="Delete"><i class="fa fa-trash-o" aria-hidden="true" data-toggle="tooltip" data-original-title="Delete"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

@endsection