<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>Membership</title>
   
   <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/bootstrap/bootstrap.min.css');?>">
       <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/bootstrap/bootstrap-responsive.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/font-awesome/css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/normalize/normalize.css');?>"> 

        <!--page specific css styles-->

        <!--flaty css styles-->
       <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/css/flaty.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/flaty_assets/css/flaty-responsive.css');?>">

         <link rel="shortcut icon" href="<?php echo base_url('assets/flaty_assets/img/favicon.html');?>">

        <script src="<?php echo base_url('assets/flaty_assets/modernizr/modernizr-2.6.2.min.js');?>"></script>
		 
		

   <link href="<?php //echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php //echo base_url('assets/css/bootstrap-responsive.min.css') ?>" rel="stylesheet" type="text/css">
<link href="<?php //echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php //echo base_url('assets/css/bootstrap-responsive.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php //echo base_url('assets/css/fonts.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php //echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php //echo base_url('assets/css/mmenu.css') ?>" rel="stylesheet" type="text/css">
    
   
  <!--<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />-->
  
  
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>-->

<script>window.jQuery || document.write('<script src="<?php echo base_url('assets/flaty_assets/jquery/jquery-1.10.1.min.js');?>"><\/script>')</script>
        <script src="<?php echo base_url('assets/flaty_assets/bootstrap/bootstrap.min.js');?>"></script>

        <script type="text/javascript">
            function goToForm(form)
            {
                $('.login-wrapper > form:visible').fadeOut(500, function(){
                    $('#form-' + form).fadeIn(500);
                });
            }
            $(function() {
                $('.goto-login').click(function(){
                    goToForm('login');
                });
                $('.goto-forgot').click(function(){
                    goToForm('forgot');
                });
                $('.goto-register').click(function(){
                    goToForm('register');
                });
            });
        </script>


<script src="<?php //echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php //echo base_url('assets/js/bootstrap.js') ?>"></script>
<script src="<?php //echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php //echo base_url('assets/js/jquery.mmenu.min.js') ?>"></script>
<script src="<?php //echo base_url('assets/js/bootstrap_dropdown.js') ?>"></script>
<!--<script type="text/javascript">
	
	$('.dropdown-toggle').dropdown()
</script>-->


<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
 
</head>
<!--<body>
<div id="header">
    	<!--<div class="logo"><a href="#"></a></div>-->
        <!--<div class="head_right">
        <?php //date_default_timezone_set('Asia/calcutta');?>
        	<h6><?php //echo date("h:i");?> <strong><?php //echo date("A"); ?></strong></h6>
            <p><?php //echo date('l, d F Y');?></p>
        </div>
    </div>-->
    