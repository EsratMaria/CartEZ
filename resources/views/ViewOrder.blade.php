<head>
    <title>CartEZ</title>
    <link href="{{ URL::asset('/assets/css/animate.min.css') }}" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/demo.css') }}" rel="stylesheet">
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <link href="{{ URL::asset('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Roboto:400,700,300') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('/assets/js/jquery.3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/chartist.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/bootstrap-notify.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>
    <script type="text/javascript" src="{{URL::asset('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/demo.js')}}"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-1.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Welcome {{ (Auth::user()->email) }}
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{route('ViewOrder')}}">
                        <i class="menu-icon fa fa-briefcase"></i>
                        <p>My Orders</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('NewAdddress')}}">
                        <i class="menu-icon fa fa-pencil-square-o"></i>
                        <p>Add a New Delivery Address</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('ChangePassword')}}">
                        <i class="menu-icon fa fa-exclamation-circle"></i>
                        <p>Change Password</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('Complaints')}}">
                        <i class="menu-icon fa fa-info-circle"></i>
                        <p>Complaints</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('product-return')}}">
                        <i class="menu-icon fa fa-star-half-full"></i>
                        <p>Return a Product</p>
                    </a>
                </li>
                @if(Auth::user()->shops()->where('user_id', $extractID)->exists())
                    <li>
                        <a href="{{route('myshop')}}">
                            <i class="menu-icon fa fa-gift"></i>
                            <p>My Shop</p>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{route('MoneyWithCartEZ')}}">
                            <i class="menu-icon fa fa-credit-card"></i>
                            <p>Make Money With Us</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">
                                <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    Dropdown
                                    <b class="caret"></b>
                                </p>

                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('user.logout')}}">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        @foreach($transaction as $trans)
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">My Orders</h4>
                                    <p class="category">All products including Taxes</p>
                                </div>
                                <div class="content">
                                    <div id="chartActivity" class="ct-chart">
                                        <ul class="list-group">
                                            @foreach($trans->cart->items as $item)
                                                <li class="list-group-item">
                                                    <span class="badge">TK {{$item['price']}}</span>
                                                    {{$item['item']['title']}} | {{$item['qty']}}
                                                </li>
                                            @endforeach
                                        </ul>
                                        <strong>Payment Status : </strong>{{$trans->payment_status}}<br><strong>Delivery Status : </strong>{{$trans->delivery_status}}<br>
                                        <strong>Purchase Date : </strong>{{$trans->purchase_date}}<br><strong>Purchase Time : </strong>{{$trans->purchase_time}}
                                    </div>
                                    <div class="panel-footer">
                                        <strong>Total Price : TK {{$trans->cart->totalPrice}}</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="{{route('home')}}">
                                CartEZ Homepage
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">CartEZ</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>