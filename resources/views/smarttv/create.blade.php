
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Shop</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link href="{{ URL::asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link href="{{ URL::asset('/assets/css/fonts.googleapis.com.css') }}" rel="stylesheet">

    <!-- ace styles -->
    <link href="{{ URL::asset('/assets/css/ace.min.css') }}" rel="stylesheet" class="ace-main-stylesheet" id="main-ace-style">



    <link href="{{ URL::asset('/assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/ace-skins.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/assets/css/ace-rtl.min.css') }}" rel="stylesheet">


    <link href="{{ URL::asset('/assets/css/ace-ie.min.csss') }}" rel="stylesheet">
    <script type="text/javascript" src="{{URL::asset('/assets/js/ace-extra.min.js')}}"></script>


    <script type="text/javascript" src="{{URL::asset('/assets/js/html5shiv.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/respond.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js')}}"></script>
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="fa fa-gift"></i>
                    {{Auth::user()->shops()->value('shop_name')}}
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">



                <li class="green dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="ace-icon fa fa-envelope-o"></i>
                            5 Messages
                        </li>

                        <li class="dropdown-content">
                            <ul class="dropdown-menu dropdown-navbar">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
                                        <span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-footer">
                            <a href="inbox.html">
                                See all messages
                                <i class="ace-icon fa fa-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <span class="user-info">
									<small>Welcome,</small>
                            {{Auth::user()->email}}
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li>
                            <a href="{{route('user.profile')}}">
                                <i class="ace-icon fa fa-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="{{route('user.logout')}}">
                                <i class="ace-icon fa fa-power-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
        <script type="text/javascript">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active">
                <a href="{{route('myshop')}}">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="#" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
								UI &amp; Elements
							</span>

                    <b class="arrow fa fa-angle-down"></b>
                </a>

                <b class="arrow"></b>

                <ul class="submenu">
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-caret-right"></i>

                            Layouts
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu">
                            <li class="">
                                <a href="top-menu.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Top Menu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 1
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="two-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Two Menus 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-1.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Default Mobile Menu
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-2.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 2
                                </a>

                                <b class="arrow"></b>
                            </li>

                            <li class="">
                                <a href="mobile-menu-3.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Mobile Menu 3
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>




                </ul>
            </li>

            <li class="">
                <a href="{{route('Add-Product-Shop')}}">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text"> Add Product </span>
                </a>
            </li>

            <li class="">
                <a href="{{route('feature')}}">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text"> Add Feature Products </span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('mysale')}}">
                    <i class="menu-icon fa fa-credit-card"></i>
                    <span class="menu-text"> Shop Transaction </span>
                </a>
            </li>

            <li class="">
                <a href="{{route('bill')}}">
                    <i class="menu-icon fa fa-cogs"></i>
                    <span class="menu-text"> Shop Billing </span>
                </a>
            </li>

            <li class="">
                <a href="{{route('cat-req')}}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text"> Category Request </span>
                </a>
            </li>

            <li class="">
                <a href="{{route('calendar')}}">
                    <i class="menu-icon fa fa-calendar"></i>

                    <span class="menu-text">
								Calendar

								<span class="badge badge-transparent tooltip-error" title="2 Important Events">
									<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
								</span>
							</span>
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('view-my-shop')}}">
                    <i class="menu-icon fa fa-picture-o"></i>
                    <span class="menu-text"> View My Shop Layout </span>
                </a>



        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>
                    <li class="active">Add Products</li>
                </ul><!-- /.breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class="page-content">
                <div class="ace-settings-container" id="ace-settings-container">
                    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                        <i class="ace-icon fa fa-cog bigger-130"></i>
                    </div>

                    <div class="ace-settings-box clearfix" id="ace-settings-box">
                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <div class="pull-left">
                                    <select id="skin-colorpicker" class="hide">
                                        <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                        <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                        <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                        <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
                                <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
                                <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
                                <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
                                <label class="lbl" for="ace-settings-add-container">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class="pull-left width-50">
                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
                                <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
                                <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                            </div>

                            <div class="ace-settings-item">
                                <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
                                <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->


                        <div class="row">
                            <div class="col-lg-20">

                                <h2 class="row" style="padding-left: 60px;color: lightslategrey;"> Smart Tv product Insert
                                </h2>
                                {!!Form::open(['method'=>'POST', 'action'=>'SmarttvController@store','files'=>true ])!!}
                                {{ csrf_field() }}

                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="title" class="col-2 col-form-label">Product Title :</label>
                                    <input class="form-control" name ="title" type="text" placeholder="Enter Title" required>
                                </div>

                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="description" class="col-2 col-form-label">Description :</label>
                                    <textarea class="form-control" name ="description" rows= "3" type="text" placeholder="Enter Description" required></textarea>
                                </div>

                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="price" class="col-2 col-form-label">Price :</label>
                                    <input class="form-control" type="number" name="price" min="1" placeholder = "Enter Price" required>
                                </div>

                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="quantity" class="col-2 col-form-label">Quantity :</label>
                                    <input class="form-control" type="number" name="quantity" min="1" placeholder = "Enter Amount" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="color" class="col-2 col-form-label">Color :</label>
                                    <input class="form-control" name ="color" type="text" placeholder="Enter Color" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="brand" class="col-2 col-form-label">Brand :</label>
                                    <input class="form-control" name ="brand" type="text" placeholder="Enter Brand" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="SKU" class="col-2 col-form-label">SKU :</label>
                                    <input class="form-control" name ="SKU" type="text" placeholder="Enter SKU" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="weight" class="col-2 col-form-label">Weight :</label>
                                    <input class="form-control" name ="weight" type="text" placeholder="Enter Weight" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="warranty" class="col-2 col-form-label">Warranty :</label>
                                    <input class="form-control" name ="warranty" type="text" placeholder="Enter warranty" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="display" class="col-2 col-form-label">Display :</label>
                                    <input class="form-control" name ="display" type="text" placeholder="Enter Display" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="features" class="col-2 col-form-label">Features :</label>
                                    <input class="form-control" name ="features" type="text" placeholder="Features " required>
                                </div>

                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="connectivity" class="col-2 col-form-label">Connectivity :</label>
                                    <input class="form-control" name ="connectivity" type="text" placeholder="Enter Connectivity Type" required>
                                </div>

                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="image1" class="col-2 col-form-label">Upload Image 1 for thumbnail :</label>
                                    <input class="form-control" name ="image1" type="file" placeholder="Choose a Thumbnail Image" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="image2" class="col-2 col-form-label">Upload Image 2 :</label>
                                    <input class="form-control" name ="image2" type="file" placeholder="Choose an Image" >
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="image3" class="col-2 col-form-label">Upload Image 3 :</label>
                                    <input class="form-control" name ="image3" type="file" placeholder="Choose another Image" >
                                </div>

                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="shop_id" class="col-2 col-form-label">Shop ID :</label>
                                    <input class="form-control" name ="shop_id" type="text" placeholder="Enter Your Shop ID" required>
                                </div>
                                <div class="form-group row" style="padding-left: 60px; padding-top: 30px; width: 1300px;">
                                    <label for="tag_text" class="col-2 col-form-label">Tag :</label>
                                    <input class="form-control" name ="tag_text" type="text" placeholder="Choose a Tag For Search" required>
                                </div>
                                <br/>
                                <br/>
                                <div class="form-group ">
                                    <div class="col-lg-10 col-lg-offset-5">
                                        {!! Form::submit('Add Product', ['class' => 'btn btn-success'] ) !!}
                                    </div>
                                </div>

                                {!! Form::close()  !!}

                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">CartEZ</span>&copy; 2017
						</span>

            </div>
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->


<script type="text/javascript" src="{{URL::asset('/assets/js/jquery-2.1.4.min.js')}}"></script>

<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>



<script type="text/javascript" src="{{URL::asset('/assets/js/jquery-1.11.3.min.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('/assets/js/bootstrap.min.js')}}"></script>


<script type="text/javascript" src="{{URL::asset('/assets/js/ace-elements.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/assets/js/ace.min.js')}}"></script>


<!-- inline scripts related to this page -->
</body>
</html>
