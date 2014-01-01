<? $this->load->view('includes/header'); ?>
<?php $this->load->helper('html'); ?>
<div id="content" class="container">
    	<div class="loginblk">
            <div class="block clearfix">
                <div class="title">
                    <div class="shadow"></div>
                     <h6><span class="span-1"><?php echo img('assets/images/lock_icon1.png'); ?></span><?php echo lang('reset_password_heading');?></h6>
<!--<h1><?php //echo lang('reset_password_heading');?></h1>-->
</div>
<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

<div class="change_pass">
<ul>
	<li>
	
		<label for="new_password" style="line-height:30px;"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label>
		<div class="input-2"><?php echo form_input($new_password);?></div>
	</li>

	<li>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> 
		<div class="input-2"><?php echo form_input($new_password_confirm);?></div>
	</li>
    <li>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<?php echo form_submit('submit', lang('reset_password_submit_btn'),'class = "submit"');?>
</li>
</ul>
<?php echo form_close();?>
</div></div></div>