<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Shop</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <!-- start menu -->
    <link href="css/newmenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/megamenu.js"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <script src="js/menu_jquery.js"></script>
    <script src="js/simpleCart.min.js"> </script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ URL::asset('https://www.w3schools.com/w3css/4/w3.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('/js/slider.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/js/starrr.js')}}"></script>
    <link href="{{ URL::asset('//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css') }}" rel="stylesheet">
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
                    {{ Auth::user()->shops()->value('shop_name') }}<a style="color: red"href="{{route('myshop')}}">   Go Back To Editor</a>
                </div>
                <div class="top_left">
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
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <div class="search">
                            <form action="#" method="get">
                                <input type="text"  name="search" placeholder="Search.."/>
                                <input type="submit" value="">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                        <!-- start header menu -->


                            <!--myshit ends here  -->


                        </div>
                    </div>
            </div>


                <div class="w3-content w3-display-container">
                    @foreach($featured as $f)
                    <img class="mySlides" src="/CartEZ/public/images/{{ $f->featured_status }}" style="width:100%">
                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>

                    @endforeach

                </div>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }
</script>


        <div class="special">
            <div class="container">
                <h3>All Products</h3>
                <div class="specia-top">
                    @foreach($product as $data)
                        @foreach($data as $a)
                            <div class="col-md-4">
                                <div class="thumbnail">

                                    <a href="{{--{{ route('product-show',[$table_name ,$a->item_id])}}--}}">

                                        <img src="/CartEZ/public/images/{{ $a->img_loc }}" style="width:80px;height: 160px;">

                                        <div class="caption">
                                            <h4 class="text-center">{{$a->title}}</h4>
                                            <p style="text-align: center"> {!! nl2br(str_limit($a->description, $limit = 28, $end = '...')) !!}</p>
                                            <br>
                                        </div>

                                    </a>

                                    <div class="grid_1 simpleCart_shelfItem">

                                    </div>
                                    <div class="text-center" style="margin-bottom: 50px;">
                                        <p class="text-center">{{$a->price}} Tk</p>
                                        <p class="ratings"style="text-align: center">
                                        <p class="text-center"><span style="color:maroon"><b>{{$reviews->where('prod_id','=',$a->item_id)->pluck('feedback_text')->count()}} @php echo" reviews  "; @endphp</b></span></p>
                                        @for ($i=1; $i <= 5 ; $i++)
                                            <span class="glyphicon glyphicon-star{{ ($i <=$reviews->where('prod_id','=',$a->item_id)->pluck('rating_point')->avg())? '' : '-empty'}}"></span>
                                        @endfor
                                        <br>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
                      <div class="clearfix"> </div>
                <p style="text-align: center">Copyrights © 2017 CartEZ. All rights reserved</p>
            </div>
        </div>
</body>
</html>