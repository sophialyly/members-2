<? $this->load->view('includes/header'); ?>
<?php $this->load->helper('html'); ?>
<div id="content" class="container">
			<div class="loginblk">
    	     <div class="block clearfix">
                <div class="title">
                    <div class="shadow"></div>
                     <h6><span class="span-1"><?php echo img('assets/images/forgot_pass.jpeg'); ?></span><?php echo lang('forgot_password_heading');?></h6>
<!--<h1><?php //echo lang('forgot_password_heading');?></h1>-->
<p><?php //echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
</div>
<div id="infoMessage"><?php echo $message;?></div>
<div class="inblock">
<?php echo form_open("auth/forgot_password");?>
<ul>
   <li>
      	<?php $identity_label = 'placeholder="Your Email"';?>
      	<!--<label for="email"><?php //echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> -->
      	<div class="input-1"><?php echo form_input($email,'',$identity_label);?></div></li>
      <li>
      <?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class = "submit"');?></li>
      </ul>

<?php echo form_close();?>
</div></div></div></div>