
<!DOCTYPE HTML>
<html>
<head>
    <title>CartEZ</title>
    <link href="{{ URL::asset('/css/bootstrap.css') }}" rel="stylesheet">
    <!-- jQuery (necessary JavaScript plugins) -->
    <script type="text/javascript" src="{{URL::asset('/js/jquery-1.11.1.min.js')}}"></script>
    <!-- Custom Theme files -->
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">
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
    <link href="{{ URL::asset('//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('/js/megamenu.js')}}"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script type="text/javascript" src="{{URL::asset('/js/menu_jquery.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/starrr.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/expanding.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/simpleCart.min.js')}}"></script>
    <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });


        });
    </script>
    <style type="text/css">

        /* Enhance the look of the textarea expanding animation */
        .animated {
            -webkit-transition: height 0.2s;
            -moz-transition: height 0.2s;
            transition: height 0.2s;
        }

        .stars {
            margin: 20px 0;
            font-size: 24px;
            color: #d17581;
        }
    </style>

</head>
<body>
<!-- header_top -->
<div class="top_bg">
    <div class="container">
        <div class="header_top">
            <div class="top_right">
                <ul>
                    <li><a href="#">help</a></li>|
                    <li><a href="{{route('contact')}}">Contact</a></li>|
                    <li><a href="#">Delivery information</a></li>
                </ul>
            </div>
            <div class="top_left">
                <h2><span></span> Call us : 032 2352 782</h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header -->
<div class="header_bg">
    <div class="container">
        <div class="header">
            <div class="head-t">
                <div class="logo">
                    <a href="index.html"><img src="{{URL::asset('/images/new.png')}}" class="img-responsive" alt=""/> </a>
                </div>
                <!-- start header_right -->
                <div class="header_right">
                    <div class="rgt-bottom">
                        <div class="log">
                            <div class="login" >
                                <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                                    <div id="loginBox">
                                        <form id="loginForm" action="{{ route('user.signin') }}" method="post">
                                            <fieldset id="body">
                                                <fieldset>
                                                    <label for="email">Email Address</label>
                                                    <input type="text" name="email" id="email">
                                                </fieldset>
                                                <fieldset>
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password">
                                                </fieldset>
                                                <input type="submit" id="login" value="Sign in">
                                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                            </fieldset>
                                            <span><a href="#">Forgot your password?</a></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reg">
                            <a href="{{route('register')}}">REGISTER</a>
                        </div>
                        <div class="cart box_1">
                            <a href="{{route('product.shoppingCart')}}">
                                <h3> (<span>{{ Session::has('cart') ? Session::get('cart')->totalQty: ' ' }}</span> items)<img src="{{URL::asset('/images/bag.png')}}" alt=""></h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="create_btn">
                            <a href="checkout.html">CHECKOUT</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="search">
                        <form>
                            <input type="text" value="" placeholder="search...">
                            <input type="submit" value="">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!-- start header menu -->
            <ul class="megamenu skyblue">
                @foreach($categories as $category)
                    <li class="grid"><a class="color2" href="#">{{$category->cat_name}}</a>
                        <div class="megapanel">
                            <div class="row">
                                <div class="col1">
                                    <div class="h_nav">

                                        <ul>
                                            @foreach ($category->subcategories as $subitem)
                                                <li><a href="{{ url($category->id, $subitem->id) }}">
                                                        {{$subitem->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
            </ul>

            <div class="row">
                <div class="col2"></div>
                <div class="col1"></div>
                <div class="col1"></div>
                <div class="col1"></div>
                <div class="col1"></div>
            </div>

            <!-- content -->
            <div class="container">
                <div class="women_main">
                    <!-- start sidebar -->
                    <div class="col-md-3 s-d">
                        <div class="w_sidebar">
                            <div class="w_nav1">
                                <h4>All</h4>

                                <ul>
                                    <li><a href="women.html">women</a></li>
                                    <li><a href="#">new arrivals</a></li>
                                    <li><a href="#">trends</a></li>
                                    <li><a href="#">boys</a></li>
                                    <li><a href="#">girls</a></li>
                                    <li><a href="#">sale</a></li>
                                </ul>
                            </div>
                            <h3>filter by</h3>
                            <form id="filter_form" action={{route('MyFilter')}} method="post">
                                <input class="item_add" type="submit" id="filter" value="Filter" onclick="submitForm()">
                                <section  class="sky-form">
                                    <?php $row=0; ?>
                                    @foreach($Filter_query as $agm)
                                        <h4>{{ $agm->display_name }}</h4>
                                        <?php
                                        $a=$options[$row];
                                        ?>

                                        <div class="row1 scroll-pane">
                                            <div class="col col-4">
                                                @foreach($a as $b)
                                                    <label class="checkbox">
                                                        <input type="checkbox" name="radio" value="{{$b}}"><i></i>

                                                        {{$b}}
                                                    </label>
                                                @endforeach
                                                <?php $row++; ?>
                                                <input type="hidden" name="att" value="{{$agm->attribute}}">
                                                <input type="hidden" name="tn" value="{{$table_name}}">

                                            </div>
                                        </div>
                                    @endforeach

                                </section>
                                {{csrf_field()}}
                            </form>

                            <section class="sky-form">
                                <h4>colour</h4>
                                <ul class="w_nav2">
                                    <li><a class="color1" href=""></a></li>
                                    <li><a class="color2" href="#"></a></li>
                                    <li><a class="color3" href="#"></a></li>
                                    <li><a class="color4" href="#"></a></li>
                                    <li><a class="color5" href="#"></a></li>
                                    <li><a class="color6" href="#"></a></li>
                                    <li><a class="color7" href="#"></a></li>
                                    <li><a class="color8" href="#"></a></li>
                                    <li><a class="color9" href="#"></a></li>
                                    <li><a class="color10" href="#"></a></li>
                                    <li><a class="color12" href="#"></a></li>
                                    <li><a class="color13" href="#"></a></li>
                                    <li><a class="color14" href="#"></a></li>
                                    <li><a class="color15" href="#"></a></li>
                                    <li><a class="color5" href="#"></a></li>
                                    <li><a class="color6" href="#"></a></li>
                                    <li><a class="color7" href="#"></a></li>
                                    <li><a class="color8" href="#"></a></li>
                                    <li><a class="color9" href="#"></a></li>
                                    <li><a class="color10" href="#"></a></li>
                                </ul>
                            </section>
                            <section class="sky-form">
                                <h4>discount</h4>
                                <div class="row1 scroll-pane">
                                    <div class="col col-4">
                                        <label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
                                    </div>
                                    <div class="col col-4">
                                        <label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
                                        <label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <!-- start content -->
                    <div class="col-md-9 w_content">
                        <div class="women">
                            <ul class="w_nav">
                                <li>Sort : </li>
                                <li><a class="active" href="#">popular</a></li> |
                                <li><a href="#">new </a></li> |
                                <li><a href="#">discount</a></li> |
                                <li><a href="#">price: Low High </a></li>
                                <div class="clear"></div>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- grids_of_4 -->
                        <div class="grids_of_4">
                            <div class="grid1_of_4">
                                @inject('feedbacks','App\Feedback'){{-- inject before foreach --}}

                                @foreach($query as $product)
                                    <div class="content_box" ><a href="#">

                                            @if ($product->img_loc)
                                                <img src="/CartEZ/public/images/{{ $product->img_loc }}"  style="width:140px; height: auto;"  />
                                            @else
                                                {{'Nothing To Show In This Category.'}}
                                            @endif
                                            <h4><a href="{{ route('product-show',[$table_name ,$product->item_id])}}">{{ $product->title }}</a></h4>
                                            <p> {!! nl2br(str_limit($product->description, $limit = 28, $end = '...')) !!}</p>
                                            @if($shop_name->where('id','=',$product->shop_id))
                                                @foreach($shop_name as $sn)
                                                    SOLD BY: {{ $sn->shop_name }}
                                                @endforeach
                                            @endif
                                            <br>
                                            <p class="ratings">
                                            <p class="pull-left"><span style="color:maroon"><b>{{$reviews->where('prod_id','=',$product->item_id)->pluck('feedback_text')->count()}} @php echo" reviews"; @endphp</b></span></p>
                                            @for ($i=1; $i <= 5 ; $i++)
                                                <span class="glyphicon glyphicon-star{{ ($i <=$reviews->where('prod_id','=',$product->item_id)->pluck('rating_point')->avg())? '' : '-empty'}}"></span>
                                            @endfor
                                            <div class="grid_1 simpleCart_shelfItem">

                                                <div class="item_add"><span class="item_price"style="text-align:center"><h6>TK {{ $product->price }}</h6></span></div>
                                                <div class="item_add"><span class="item_price"><a href="{{url('product-addToCart',[$table_name ,$product->item_id])}}">add to cart</a></span></div>
                                            </div>


                                            <br>

                                            <br><br>

                                            <!-- shit here -->

                                            <!-- shit ends -->

                                        </a>

                                    </div>
                                @endforeach

                            </div>


                        </div>


                        <!-- end grids_of_4 -->



                        <div class="clearfix"></div>

                        <!-- end content -->
                    </div>
                </div>
                <div class="foot-top">
                    <div class="container">
                        <div class="col-md-6 s-c">
                            <li>
                                <div class="fooll">
                                    <h5>follow us on</h5>
                                </div>
                            </li>
                            <li>
                                <div class="social-ic">
                                    <ul>
                                        <li><a href="#"><i class="facebok"> </i></a></li>
                                        <li><a href="#"><i class="twiter"> </i></a></li>
                                        <li><a href="#"><i class="goog"> </i></a></li>
                                        <li><a href="#"><i class="be"> </i></a></li>
                                        <li><a href="#"><i class="pp"> </i></a></li>
                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                            </li>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-6 s-c">
                            <div class="stay">
                                <div class="stay-left">
                                    <form>
                                        <input type="text" placeholder="Enter your email to join our newsletter" required="">
                                    </form>
                                </div>
                                <div class="btn-1">
                                    <form>
                                        <input type="submit" value="join">
                                    </form>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="container">
                        <div class="col-md-3 cust">
                            <h4>CUSTOMER CARE</h4>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="buy.html">How To Buy</a></li>
                            <li><a href="#">Delivery</a></li>
                        </div>
                        <div class="col-md-2 abt">
                            <h4>ABOUT US</h4>
                            <li><a href="#">Our Stories</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </div>
                        <div class="col-md-2 myac">
                            <h4>MY ACCOUNT</h4>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="#">My Cart</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="buy.html">Payment</a></li>
                        </div>
                        <div class="col-md-5 our-st">
                            <div class="our-left">
                                <h4>OUR STORES</h4>
                            </div>
                            <div class="our-left1">
                                <div class="cr_btn">
                                    <a href="#">SOLO</a>
                                </div>
                            </div>
                            <div class="our-left1">
                                <div class="cr_btn1">
                                    <a href="#">BOGOR</a>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                            <li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
                            <li><i class="phone"> </i>025-2839341</li>
                            <li><a href="mailto:info@example.com"><i class="mail"> </i>info@CartEZ.com </a></li>

                        </div>
                        <div class="clearfix"> </div>
                        <p>© 2016-2017 CartEZ.com | The CartEZ logo is a Registered Trademark of CartEZ</p>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

</body>
</html>