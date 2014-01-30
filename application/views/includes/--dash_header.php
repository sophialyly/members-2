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
		 <!-- new theme -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/sb-admin.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
		<!---- end new theme --->
		
        <link rel="stylesheet" href="<?php //echo base_url('assets/flaty_assets/normalize/normalize.css');?>">      
        <!--page specific Form css styles-->
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/chosen-bootstrap/chosen.min.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/jquery-tags-input/jquery.tagsinput.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/bootstrap-fileupload/bootstrap-fileupload.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/bootstrap-colorpicker/css/colorpicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/bootstrap-timepicker/compiled/timepicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/clockface/css/clockface.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/bootstrap-datepicker/css/datepicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/bootstrap-daterangepicker/daterangepicker.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css');?>" />
        <link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/flaty_assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css');?>" />

		 
        <!--page specific css styles-->

        <!--flaty css styles-->
        <link rel="stylesheet" href="<?php //echo base_url('assets/flaty_assets/css/flaty.css');?>">
        <link rel="stylesheet" href="<?php //echo base_url('assets/flaty_assets/css/flaty-responsive.css');?>">
        
         <!--page specific Tables css styles-->
        <link rel="stylesheet" href="<?php //echo base_url('assets/flaty_assets/data-tables/DT_bootstrap.css');?>" />
		
        <link rel="shortcut icon" href="<?php //echo base_url('assets/flaty_assets/img/favicon.html');?>">

		<!--- New theme start -->

        <script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
        <!--basic scripts-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
       <!-- <script>window.jQuery || document.write('<script src="<?php //echo base_url('assets/flaty_assets/jquery/jquery-1.10.1.min.js');?>"><\/script>')</script>-->
        <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
        <script src="<?php echo base_url('assets/js/morris/chart-data-morris.js');?>"></script>

        <!--page specific plugin scripts-->
        <script src="<?php echo base_url('assets/js/tablesorter/jquery.tablesorter.js');?>"></script>
        <script src="<?php echo base_url('assets/js/tablesorter/tables.js');?>"></script>
		<!-- End New theme --->
		
		
        <script src="<?php //echo base_url('assets/flaty_assets/flot/jquery.flot.pie.js');?>"></script>
        <script src="<?php //echo base_url('assets/flaty_assets/flot/jquery.flot.stack.js');?>"></script>
        <script src="<?php //echo base_url('assets/flaty_assets/flot/jquery.flot.crosshair.js');?>"></script>
        <script src="<?php //echo base_url('assets/flaty_assets/flot/jquery.flot.tooltip.min.js');?>"></script>
        <script src="<?php //echo base_url('assets/flaty_assets/sparkline/jquery.sparkline.min.js');?>"></script>
        
         <!--page specific Form plugin scripts-->
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/chosen-bootstrap/chosen.jquery.min.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-inputmask/bootstrap-inputmask.min.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/jquery-tags-input/jquery.tagsinput.min.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-fileupload/bootstrap-fileupload.min.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-timepicker/js/bootstrap-timepicker.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/clockface/js/clockface.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-datepicker/js/bootstrap-datepicker.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-daterangepicker/date.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-switch/static/js/bootstrap-switch.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js');?>"></script> 
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/ckeditor/ckeditor.js');?>"></script> 
        
         <!--page specific Tables plugin scripts-->
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/data-tables/jquery.dataTables.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/data-tables/DT_bootstrap.js');?>"></script>
         
         <!--page specific Validation plugin scripts-->
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/jquery-validation/dist/jquery.validate.min.js');?>"></script>
        <script type="text/javascript" src="<?php //echo base_url('assets/flaty_assets/jquery-validation/dist/additional-methods.min.js');?>"></script>
		
       	<!--page specific wizard plugin scripts-->
        <script src="<?php //echo base_url('assets/flaty_assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js');?>"></script>
        
        <!--flaty scripts-->
        <script src="<?php //echo base_url('assets/flaty_assets/js/flaty.js');?>"></script>
		
		<script src="<?php echo base_url('assets/js/highcharts.js');?>"></script> 
		<script src="<?php //echo base_url('assets/js/jquery.1.9.1.min.js');?>"></script>
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
		
        <!--page specific datepicker styles-->
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <!-- <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css" />-->

		<!--<link rel="stylesheet" type="text/css" href="<?php //echo base_url('assets/css/jquery-ui.css');?>" />
    <script src="<?php //echo base_url('assets/js/jquery-1.9.1.js');?>" type="text/javascript" ></script>
    <script src="<?php //echo base_url('assets/css/jquery-ui.js');?>" type="text/javascript" ></script>-->
    <!--<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css" />-->
    <script type="text/javascript">
    $(function() {
	var date = $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
       $( "#datepicker" ).datepicker();
	   $( "#datepicker1" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
	    $( "#datepicker2" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
		
    });
    </script>
	
		
		<!--end page specific datepicker styles-->
    </head>
	 <body>

    <div id="wrapper">
	<!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php if($this->uri->segment(1)==='dashboard'){?> class="active" <? } ?>><a href="<?php echo base_url().'index.php/dashboard'?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li <?php if($this->uri->segment(1)==='member'){?> class="active" <? } ?>><a href="<?php echo base_url().'index.php/member'?>"><i class="fa fa-edit"></i> Members</a></li>
            <li <?php if($this->uri->segment(1)==='payment'){?> class="active" <? } ?>><a href="<?php echo base_url().'index.php/payment'?>"><i class="fa fa-edit"></i> Payment</a></li>
            <li <?php if($this->uri->segment(1)==='invoice'){?> class="active" <? } ?>><a href="<?php echo base_url().'index.php/invoice'?>"><i class="fa fa-edit"></i> Invoice</a></li>
			<li <?php if($this->uri->segment(1)==='membership'){?> class="active" <? } ?>><a href="<?php echo base_url().'index.php/membership'?>"><i class="fa fa-edit"></i> Membership</a></li>
           <!-- <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
            <li><a href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
            <li><a href="bootstrap-grid.html"><i class="fa fa-wrench"></i> Bootstrap Grid</a></li>
            <li><a href="blank-page.html"><i class="fa fa-file"></i> Blank Page</a></li>-->
            <li class="dropdown">
              <a href="<?php echo base_url().'index.php/setting'?>" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!--<li><a href="#">Settings</a></li>-->
                <li <?php if($this->uri->segment(1)==='settings'){?> class="active" <? } ?>><a href="<?php echo base_url().'index.php/setting/edit'?>">Company</a></li>
                <li><a href="#">Tax</a></li>
                <li><a href="#">Payments</a></li>
				<li><a href="#">Email Templates</a></li>
				<li><a href="#">Other</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>
            <li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><!--<a href="<?php //echo base_url().'auth/logout'?>">--><i class="fa fa-power-off"></i><?php echo anchor('auth/logout/','Logout'); ?></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
	
	
	
	
	
	
	
        




    