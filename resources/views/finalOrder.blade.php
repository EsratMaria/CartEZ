<!DOCTYPE HTML>
<html>
<head>
    <title>CartEZ</title>
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">
    <!-- jQuery (necessary JavaScript plugins) -->
    <script type="text/javascript" src="{{URL::asset('/js/jquery-1.11.1.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet">
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900') }}" rel="stylesheet">
    <link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/newmenu.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('/js/megamenu.js')}}"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script type="text/javascript" src="{{URL::asset('/js/menu_jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/app.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/simpleCart.min.js')}}"></script>
</head>

<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1>Checkout</h1>
        <h4>Your Total:  {{$total}}</h4>
        <hr>
        <form action="{{route('checkout')}}" method="POST">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="paymenttype">Choose an Option for Delivery: </label>
                        <select class="form-control " name="paymenttype" id="paymenttype" >
                            @foreach($payment as $pay)
                                <option value="{{$pay->id}}" selected="selected" >{{$pay->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group ">
                        <label for="bkash">bKash or Contact no: </label>
                        <input type="number" id="bkash" name="bkash" class="form-control" placeholder="Enter your bKash or Contact no:" required>
                    </div>
                </div>
                @if(count($id)>0)
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="delivery_addresses">Delivery Address: </label>
                        <select class="form-control " name="address" id="address" >
                            @foreach($id as $user_id)
                                <option value="{{$user_id->address}}" selected="selected" >{{$user_id->address}}</option>
                            @endforeach
                            <option value="None" selected="selected" >None</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group ">
                        <label for="address">Add new Delivery Address: </label>
                        <textarea type="text" id="new_address" name="new_address" class="form-control" placeholder="Enter new Delivery Address" ></textarea>
                    </div>
                </div>
                @else
                    <div class="col-xs-12">
                        <div class="form-group ">
                            <label for="address">Delivery Address: </label>
                            <textarea type="text" id="address" name="address" class="form-control" placeholder="Enter a Delivery Address" required></textarea>
                        </div>
                    </div>
                @endif
                {{--</div>--}}
                {{--<div id="here">--}}
                {{--</div>--}}

                <div class="col-xs-12">
                    <div class="form-group ">
                        <div class="col-lg-4 col-lg-offset-4">
                            {!! Form::submit('Submit', ['class' => 'btn btn-success'] ) !!}
                        </div>
                    </div>
                </div>

            </div>
            {{csrf_field()}}
        </form>
    </div>
</div>