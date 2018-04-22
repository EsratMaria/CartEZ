<!--<h1>hi</h1>-->
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
    <script type="text/javascript" src="{{URL::asset('/js/starrr.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/expanding.js')}}"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script type="text/javascript" src="{{URL::asset('/js/menu_jquery.js')}}"></script>
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
        .rating {
            float:right;
            width:300px;
        }
        .rating span { float:right; position:relative; }
        .rating span input {
            position:absolute;
            top:0px;
            left:0px;
            opacity:0;
        }
        .rating span label {
            display:inline-block;
            width:30px;
            height:30px;
            text-align:center;
            color:#FFF;
            background:#ccc;
            font-size:30px;
            margin-right:2px;
            line-height:30px;
            border-radius:50%;
            -webkit-border-radius:50%;
        }
        .rating span:hover ~ span label,
        .rating span:hover label,
        .rating span.checked label,
        .rating span.checked ~ span label {
            background:#F90;
            color:#FFF;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            // Check Radio-box
            $(".rating input:radio").attr("checked", false);

            $('.rating input').click(function () {
                $(".rating span").removeClass('checked');
                $(this).parent().addClass('checked');
            });

            $('input:radio').change(
                function(){
                    var userRating = this.value;
                    alert(userRating);
                });
        });
    </script>


</head>
<body>
<!-- header_top -->
@if(Auth::check())
    <div class="top_bg">
        <div class="container">
            <div class="header_top">
                <div class="top_right">
                    Hi {{ Auth::user()->email}}<a style="color: red"href="{{route('user.profile')}}">  Your Profile</a>
                </div>
                <div class="top_left">
                    <h2><a STYLE="color: deepskyblue "  href="{{route('user.logout')}}">LOGOUT</a></h2>
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
                        <a href=""><img src="images/new.png" class="img-responsive" alt=""/> </a>
                    </div>
                    <!-- start header_right -->
                    <div class="header_right">
                        <div class="rgt-bottom">

                            <div class="cart box_1">
                                <a href="{{route('product.shoppingCart')}}">
                                    <h3> (<span id="simpleCart_quantity" class="simpleCart_quantity">{{ Session::has('cart') ? Session::get('cart')->totalQty: ' ' }}</span> items)<img src="images/bag.png" alt=""></h3>
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
                            <form action="search" method="get">
                                <input type="text"  name="search" placeholder="Search.."/>
                                <input type="submit" value="">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                @else
                    <div class="top_bg">
                        <div class="container">
                            <div class="header_top">
                                <div class="top_right">
                                    Homepage
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_bg">
                        <div class="container">
                            <div class="header">
                                <div class="head-t">
                                    <div class="logo">
                                        <a href=""><img src="images/new.png" class="img-responsive" alt=""/> </a>
                                    </div>
                                    <!-- start header_right -->
                                    <div class="header_right">
                                        <div class="rgt-bottom">

                                            <div class="reg">
                                                <a href="{{route('Register')}}">LOGIN</a>
                                            </div>
                                            <div class="cart box_1">
                                                <a href="{{route('product.shoppingCart')}}">
                                                    <h3> (<span id="simpleCart_quantity" class="simpleCart_quantity">{{ Session::has('cart') ? Session::get('cart')->totalQty: ' ' }}</span> items)<img src="images/bag.png" alt=""></h3>
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
                                            <form action="search" method="get">
                                                <input type="text"  name="search" placeholder="Search.."/>
                                                <input type="submit" value="">
                                            </form>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div></div>

                        @endif


                        <!-- start header menu -->
            @if(Session::has('review_posted'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5>Your review has been posted!</h5>
                </div>
            @endif
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
            <!--shit ends here -->
        </div>
    </div>
</div>
<!-- content -->
<div class="container">
    <div class="women_main">
        <!-- start content -->
        <div class="row single">
            <div class="col-md-9 det">
                <div class="single_left">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">

                                @foreach ($pro_img as $photo)
                                    <a href="/CartEZ/public/images/{{ $photo->image_loc }}" data-lity>
                                        <img class="img-responsive" src="/CartEZ/public/images/{{ $photo->image_loc }}"  />
                                    </a>
                                @endforeach

                        </ul>
                        <div class="clearfix"></div>
                        @foreach($query as $p)
                            <div class="clearfix"></div>
                    </div>
                    <div class="desc1 span_3_of_2">
                        <h3>{{$p->title}}</h3>
                        <span class="brand">
                                    Shop: {{ $shop_name->where('id',$p->shop_id)->pluck('shop_name') }}

                            <br>
                        <span class="code">{{$p->description}}</span><br>
                        <p></p>
                        <div class="price">
                            <span class="text"><b>TK <b>{{$p->price}}</b></b></span>
                        </div>
                        <div class="det_nav1">
                            <h4>Select a size :</h4>
                            <div class=" sky-form col col-4">
                                <ul>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L</label></li>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>S</label></li>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>M</label></li>
                                    <li><label class="checkbox"><input type="checkbox" name="checkbox"><i></i>XL</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn_form">
                            <a href="{{url('product-addToCart',[$table_name ,$p->item_id])}}">buy</a>
                        </div>
                        <a href="#"><span>login to save in wishlist </span></a>
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="single-bottom1">
                    <h6>Details</h6>
                    <p class="prod-desc">{{$p->description}}</p>
                </div>
                <div class="product">
                    <div class="registration_form">
                        <!-- Form -->
                        <form id="review_form" action="{{route('product-review')}}" method="post">
                            <div class="text-right">
                                <a href="" id="open-review-box" class="btn btn-success btn-green">Leave a Review</a>
                            </div>
                            {{Form::open()}}
                            {{Form::hidden('rating', null, array('id'=>'ratings-hidden'))}}
                            {{Form::textarea('comment', null, array('rows'=>'5','id'=>'new-review','class'=>'form-control animated','placeholder'=>'Enter your review here...'))}}

                            <div class="text-right">
                                <div class="rating">
                                    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
                                    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
                                    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
                                    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
                                    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
                                </div>
                            </div>
                            <br><br><br><br>

                                @if(count($ExtractingName)>0)

                                    @php echo "<strong><span style=color:#FF69B4;text-align:center;>"."You Are Reviewing As:"."</span></strong>"; @endphp <br>
                                    <select class="form-control " name="user_review_email" id="user_review_email" >
                                        <option value="{{$ExtractingName->email}}" selected="selected" ><span style="color: #FF69B4">{{$ExtractingName->email}}</span></option>
                                    </select>
                                    <input id="pid" type="hidden" name="pid" value="{{$p->item_id}}" />

                                @else
                                    @php echo "<strong><span style=color:#FF69B4;text-align:center;>"."You Must Sign In To Post A Review"."</span></strong>"; @endphp
                                @endif
                                    <div class="text-right">
                                        <button class="btn btn-success btn-lg" type="submit" style="color: white"><b><span style="color: white;">Save</span></b></button>
                                    </div>
                            {{Form::close()}}
                            {{csrf_field()}}
                        </form>
                    </div>

                @endforeach
                <!-- related product starts -->

                <div class="single-bottom2">
                    <h6>Reviews From Others</h6>
                    @if(Session::get('errors'))
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5>There were errors while submitting this review:</h5>
                            @foreach($errors->all('<li>:message</li>') as $message)
                                {{$message}}
                            @endforeach
                        </div>
                    @endif




                    @foreach($reviews as $review)
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                @for ($i=1; $i <= 5 ; $i++)
                                    <span class="glyphicon glyphicon-star{{ ($i <= $review->rating_point) ? '' : '-empty'}}"></span>
                                @endfor <br>
                                @php
                                    $db = new mysqli('localhost','root','','cartez')
                                            or die('Error connecting to MySQL server.');
                                   $newvalue=$review->user_id;
                                   $result = $db->query("SELECT * FROM users WHERE id=$newvalue ");
                                   $combo="";
                                   if($result){
                                        if($result->num_rows){
                                            while($row=$result->fetch_object()){
                                                    $combo=$row->email;
                                            }
                                            $result->free();
                                        }
                                   }
                                   echo "<strong><span style=color:#FF69B4;text-align:center;>".$combo."</span></strong>";

                                @endphp

                                <p>{{$review->feedback_text}}</p>
                            </div>
                        </div>
                    @endforeach

                        <div class="clearfix"></div>
                    </div>
                </div>


                <!--- ends-->

                <div class="single-bottom2">
                    <h6>Related Products</h6>
                    @foreach($recom_item as $item)
                        @foreach($item as $x)
                            <div class="product">
                                <div class="product-desc">
                                    <div class="product-img">
                                        <img src="/CartEZ/public/images/{{ $x->img_loc }}" class="img-responsive " alt=""/>
                                    </div>
                                    <div class="prod1-desc">
                                        <h5><a class="product_link" href="#">{{$x->title}}</a></h5>
                                        <p class="product_descr"> {{$x->description}} </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="product_price">
                                    <span class="price-access">{{$x->price}}</span>
                                    <button class="button1"><span>Add to cart</span></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
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
            <li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>

        </div>
        <div class="clearfix"> </div>
        <p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
</body>
</html>