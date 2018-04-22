
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

<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>


    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="#">Profile</a>
                    </li>
                    <li class="active">Create My Shop</li>
                </ul><!-- /.breadcrumb -->
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
                        <div id="content">
                            <div class="outer">
                                <div class="inner bg-light lter">
                                    <!--BEGIN INPUT TEXT FIELDS-->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="box dark">
                                                <header>
                                                    <div class="icons"></div>
                                                    <h5 style="color:limegreen;"><b>Create Your Shop</b></h5>  <br><br>   <!-- /.toolbar -->
                                                </header>
                                                @if(session()->has('message'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('message') }}
                                                    </div>
                                                @endif
                                                <div id="div-1" class="body">
                                                    <form class="form-horizontal" method="post" action="{{route('ViewShop')}}">


                                                        {{Form::open()}}

                                                        <div class="form-group">
                                                            <label for="text2" class="control-label col-lg-4">Shop Name</label>

                                                            <div class="col-lg-8">
                                                                <input type="text" id="name" name="name" placeholder="enter your shop name.." class="form-control">
                                                            </div>
                                                        </div>
                                                        <!-- /.form-group -->

                                                        <div class="form-group">
                                                            <label for="autosize" class="control-label col-lg-4">Short Description About Shop</label>

                                                            <div class="col-lg-8">
                                                                <textarea id="autosize" name="desc" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="autosize" class="control-label col-lg-4">Address</label>

                                                            <div class="col-lg-8">
                                                                <textarea id="autosize" name="address" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="text2" class="control-label col-lg-4">Contact No</label>

                                                            <div class="col-lg-8">
                                                                <input type="text" id="phone" name="phone" placeholder="your phone number here.." class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="text2" class="control-label col-lg-4">Opening Hour</label>

                                                            <div class="col-lg-8">
                                                                <input type="text" id="open" name="open" placeholder="at what time do your shop open.." class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="text2" class="control-label col-lg-4">Closing Hour</label>

                                                            <div class="col-lg-8">
                                                                <input type="text" id="close" name="close" placeholder="at what time your shop closes" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="text2" class="control-label col-lg-4">BKash Number</label>

                                                            <div class="col-lg-8">
                                                                <input type="text" id="bkash" name="bkash" placeholder="your BKash number here.." class="form-control">
                                                            </div>
                                                        </div><br><br><br>
                                                        <input type="submit" class="btn btn-success" style="float: right" value="Make My Shop"><br><br>

                                                        <!-- /.form-group -->{{Form::close()}}
                                                    <!-- /.form-group -->{{csrf_field()}}

                                                    </form>
                                                    <a href="{{route('user.profile')}}">Go Back</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!--END TEXT INPUT FIELD-->

                                        <!--BEGIN SELECT        -->


                                        <!--END SELECT-->
                                    </div>
                                    <!-- /.row -->



                                </div>
                                <!-- /.inner -->
                            </div>
                            <!-- /.outer -->
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
