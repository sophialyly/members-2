<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		 <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/bootstrap/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/bootstrap/bootstrap-responsive.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/font-awesome/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/normalize/normalize.css');?>">      
        <!--page specific Form css styles-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/chosen-bootstrap/chosen.min.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/jquery-tags-input/jquery.tagsinput.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/bootstrap-fileupload/bootstrap-fileupload.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/bootstrap-colorpicker/css/colorpicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/bootstrap-timepicker/compiled/timepicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/clockface/css/clockface.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/bootstrap-datepicker/css/datepicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/bootstrap-daterangepicker/daterangepicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/flaty_assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" />

		
        
        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/css/flaty.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/css/flaty-responsive.css');?>">
        
         <!--page specific Tables css styles-->
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/data-tables/DT_bootstrap.css');?>" />
		
        <link rel="shortcut icon" href="<?php echo base_url('assets/flaty_assets/img/favicon.html');?>">

        <script src="<?php echo base_url('assets/flaty_assets/modernizr/modernizr-2.6.2.min.js');?>"></script>
        <!--basic scripts-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
        <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/flaty_assets/jquery/jquery-1.10.1.min.js');?>"><\/script>')</script>
        <script src="<?php echo base_url('assets/flaty_assets/bootstrap/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('assets/flaty_assets/nicescroll/jquery.nicescroll.min.js');?>"></script>

        <!--page specific plugin scripts-->
        <script src="<?php echo base_url('assets/flaty_assets/flot/jquery.flot.js');?>"></script>
        <script src="<?php echo base_url('assets/flaty_assets/flot/jquery.flot.resize.js');?>"></script>
        <script src="<?php echo base_url('assets/flaty_assets/flot/jquery.flot.pie.js');?>"></script>
        <script src="<?php echo base_url('assets/flaty_assets/flot/jquery.flot.stack.js');?>"></script>
        <script src="<?php echo base_url('assets/flaty_assets/flot/jquery.flot.crosshair.js');?>"></script>
        <script src="<?php echo base_url('assets/flaty_assets/flot/jquery.flot.tooltip.min.js');?>"></script>
        <script src="<?php echo base_url('assets/flaty_assets/sparkline/jquery.sparkline.min.js');?>"></script>
        
         <!--page specific Form plugin scripts-->
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/chosen-bootstrap/chosen.jquery.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-inputmask/bootstrap-inputmask.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/jquery-tags-input/jquery.tagsinput.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-fileupload/bootstrap-fileupload.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-timepicker/js/bootstrap-timepicker.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/clockface/js/clockface.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-daterangepicker/date.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-switch/static/js/bootstrap-switch.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>"></script> 
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/ckeditor/ckeditor.js');?>"></script> 
        
         <!--page specific Tables plugin scripts-->
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/data-tables/jquery.dataTables.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/data-tables/DT_bootstrap.js');?>"></script>
         
         <!--page specific Validation plugin scripts-->
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/jquery-validation/dist/jquery.validate.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/flaty_assets/jquery-validation/dist/additional-methods.min.js');?>"></script>
		
       	<!--page specific wizard plugin scripts-->
        <script src="<?php echo base_url('assets/flaty_assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js');?>"></script>
        
        <!--flaty scripts-->
        <script src="<?php echo base_url('assets/flaty_assets/js/flaty.js');?>"></script>
		
		<script src="<?php echo base_url('assets/js/highcharts.js');?>"></script> 
		<!--<script src="<?php //echo base_url('assets/js/jquery.1.9.1.min.js');?>"></script>-->
		<script type="text/javascript">
				$(function () {
        $('#container').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Average Income 2013'
            },
            /*subtitle: {
                text: 'Source: WorldClimate.com'
            },*/
            xAxis: [{
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '{value}k',
                    style: {
                        color: '#89A54E'
                    }
                },
                title: {
                    text: 'Income',
                    style: {
                        color: '#89A54E'
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Income',
                    style: {
                        color: '#4572A7'
                    }
                },
                labels: {
                    format: '{value} k',
                    style: {
                        color: '#4572A7'
                    }
                },
                opposite: true
            }],
            tooltip: {
                shared: true
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                x: 120,
                verticalAlign: 'top',
                y: 100,
                floating: true,
                backgroundColor: '#FFFFFF'
            },
            series: [{
                name: 'Month',
                color: '#4572A7',
                type: 'column',
                yAxis: 1,
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
                tooltip: {
                    valueSuffix: 'k'
                }
    
            }, {
                name: 'Income',
                color: '#89A54E',
                type: 'spline',
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
                tooltip: {
                    valueSuffix: 'k'
                }
            }]
        });
    });
		</script>
        
    </head>
    <html>
    <?php foreach($single as $row){?>
    <body class="<?php echo $row->css_style;?>"><? }?>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- BEGIN Theme Setting -->
        <div id="theme-setting">
            <a href="#"><i class="icon-gears icon-2x"></i></a>
            <ul>
                <li>
                    <span>Skin</span>
                    <ul class="colors" data-target="body" data-prefix="skin-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Navbar</span>
                    <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Sidebar</span>
                    <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span></span>
                    <a data-target="navbar" href="#"><i class="icon-check-empty"></i> Fixed Navbar</a>
                    <a class="pull-right visible-desktop" data-target="sidebar" href="#"><i class="icon-check-empty"></i> Fixed Sidebar</a>
                </li>
            </ul>
        </div>
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN Brand -->
                    <a href="#" class="brand">
                        <small>
                            <i class="icon-desktop"></i>
                             Admin
                        </small>
                    </a>
                    <!-- END Brand -->

                    <!-- BEGIN Responsive Sidebar Collapse -->
                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-reorder"></i>
                    </a>
                    <!-- END Responsive Sidebar Collapse -->

                    <!-- BEGIN Navbar Buttons -->
                    <ul class="nav flaty-nav pull-right">
                        <!-- BEGIN Button Tasks -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-tasks"></i>
                                <span class="badge badge-warning">4</span>
                            </a>

                            <!-- BEGIN Tasks Dropdown -->
                            <ul class="pull-right dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-ok"></i>
                                    4 Tasks to complete
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Software Update</span>
                                            <span class="pull-right">75%</span>
                                        </div>

                                        <div class="progress progress-mini progress-warning">
                                            <div style="width:75%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Transfer To New Server</span>
                                            <span class="pull-right">45%</span>
                                        </div>

                                        <div class="progress progress-mini progress-danger">
                                            <div style="width:45%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Bug Fixes</span>
                                            <span class="pull-right">20%</span>
                                        </div>

                                        <div class="progress progress-mini">
                                            <div style="width:20%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <div class="clearfix">
                                            <span class="pull-left">Writing Documentation</span>
                                            <span class="pull-right">85%</span>
                                        </div>

                                        <div class="progress progress-mini progress-success progress-striped active">
                                            <div style="width:85%" class="bar"></div>
                                        </div>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See tasks with details</a>
                                </li>
                            </ul>
                            <!-- END Tasks Dropdown -->
                        </li>
                        <!-- END Button Tasks -->

                        <!-- BEGIN Button Notifications -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-bell-alt"></i>
                                <span class="badge badge-important">5</span>
                            </a>

                            <!-- BEGIN Notifications Dropdown -->
                            <ul class="dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-warning-sign"></i>
                                    5 Notifications
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-comment orange"></i>
                                        <p>New Comments</p>
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-twitter blue"></i>
                                        <p>New Twitter followers</p>
                                        <span class="badge badge-info">7</span>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar2.jpg" alt="Alex" />
                                        <p>David would like to become moderator.</p>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-bug pink"></i>
                                        <p>New bug in program!</p>
                                    </a>
                                </li>

                                <li class="notify">
                                    <a href="#">
                                        <i class="icon-shopping-cart green"></i>
                                        <p>You have some new orders</p>
                                        <span class="badge badge-success">+10</span>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See all notifications</a>
                                </li>
                            </ul>
                            <!-- END Notifications Dropdown -->
                        </li>
                        <!-- END Button Notifications -->

                        <!-- BEGIN Button Messages -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-success">3</span>
                            </a>

                            <!-- BEGIN Messages Dropdown -->
                            <ul class="dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-comments"></i>
                                    3 Messages
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar3.jpg" alt="Sarah's Avatar" />
                                        <div>
                                            <span class="msg-title">Sarah</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </a>
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar4.jpg" alt="Emma's Avatar" />
                                        <div>
                                            <span class="msg-title">Emma</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>2 Days ago</span>
                                            </span>
                                        </div>
                                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ...</p>
                                    </a>
                                </li>

                                <li class="msg">
                                    <a href="#">
                                        <img src="img/demo/avatar/avatar5.jpg" alt="John's Avatar" />
                                        <div>
                                            <span class="msg-title">John</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>8:24 PM</span>
                                            </span>
                                        </div>
                                        <p>Duis aute irure dolor in reprehenderit in ...</p>
                                    </a>
                                </li>

                                <li class="more">
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                            <!-- END Notifications Dropdown -->
                        </li>
                        <!-- END Button Messages -->

                        <!-- BEGIN Button User -->
                        <?php $this->load->helper('html');
						$this->load->library('session');  ?>
                        <li class="user-profile">
                            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                            <?php echo img('assets/images/avtar_icon5.png',array('class' =>'nav-user-photo')); ?>
                               <!-- <img class="nav-user-photo" src="img/demo/avatar/avatar1.jpg" alt="Penny's Photo" />-->
                                <span class="hidden-phone" id="user_info">
                                   <?php echo $this->session->userdata('username'); ?>
                                </span>
                                <i class="icon-caret-down"></i>
                            </a>

                            <!-- BEGIN User Dropdown -->
                            <ul class="dropdown-menu dropdown-navbar" id="user_menu">
                                <li class="nav-header">
                                    <i class="icon-time"></i>
                                    Logined From 20:45
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        Account Settings
                                    </a>
                                </li>

                                <li>
                                    <!--<a href="#">-->
                                       <i class="icon-user"><?php echo anchor('auth/edit_user/',' My Profile');?></i>
                                    <!--</a>-->
                                </li>

                               <!-- <li>
                                    <a href="#">
                                        <i class="icon-question"></i>
                                        Help
                                    </a>
                                </li>-->

                               <li class="divider visible-phone"></li>

                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-tasks"></i>
                                        Tasks
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-bell-alt"></i>
                                        Notifications
                                        <span class="badge badge-important">8</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-envelope"></i>
                                        Messages
                                        <span class="badge badge-success">5</span>
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                <i class="icon-off"><?php echo anchor('auth/logout/','Logout'); ?></i><!--<a href="#">
                                        
                                        Logout
                                    </a>-->
                                </li>
                            </ul>
                            <!-- BEGIN User Dropdown -->
                        </li>
                        <!-- END Button User -->
                    </ul>
                    <!-- END Navbar Buttons -->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        <!-- END Navbar -->
    




    