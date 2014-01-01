<? $this->load->view('includes/header'); ?>
<?php $this->load->helper('html'); ?>
<div id="content" class="container">
    	<div class="loginblk">
            <div class="reg_block clearfix">
                <div class="title">
                    <div class="shadow"></div>
                     <h6><span class="span-1"><?php echo img('assets/images/reg_icon.png'); ?></span><?php echo lang('create_user_heading');?></h6>

</div>
<div id="infoMessage"><?php echo $message;?></div>
<div class="inblock">
<?php echo form_open("auth/create_user");?>
	<ul>
    	<li>
      		 <?php $firstname = 'placeholder="First Name*"';?>
        <div class="input-1"> <?php echo form_input('first_name','',$firstname);?></div>
            <?php //echo lang('create_user_fname_label', 'first_name');?> 
            <?php //echo form_input($first_name);?>
      	</li>

      <li>
            <?php $lastname = 'placeholder="Last Name*"';?>
        <div class="input-1"> <?php echo form_input('last_name','',$lastname);?></div>
			<?php //echo lang('create_user_lname_label', 'first_name');?> 
            <?php //echo form_input($last_name);?>
      </li>

      <li>
            <?php $company = 'placeholder="Company Name*"';?>
        <div class="input-3"> <?php echo form_input('company','',$company);?></div>
			<?php //echo lang('create_user_company_label', 'company');?> 
            <?php //echo form_input($company);?>
      </li>

      <li>
            <?php $email = 'placeholder="Email*"';?>
        <div class="input-1"> <?php echo form_input('email','',$email);?></div>
			<?php //echo lang('create_user_email_label', 'email');?> 
            <?php //echo form_input($email);?>
      </li>

      <li>
            <?php $phone = 'placeholder="Phone*"';?>
        <div class="input-4"> <?php echo form_input('phone','',$phone);?></div>
			<?php //echo lang('create_user_phone_label', 'phone');?> 
            <?php //echo form_input($phone);?>
      </li>
      

      <li>
            <?php $password = 'placeholder="Password*"';?>
        <div class="input-2"> <?php echo form_password('password','',$password);?></div>
			<?php //echo lang('create_user_password_label', 'password');?> 
            <?php //echo form_input($password);?>
      </li>

      <li>
           <?php $password_confirm = 'placeholder="Confirm Password*"';?>
        <div class="input-2"> <?php echo form_password('password_confirm','',$password_confirm);?></div>
			<?php //echo lang('create_user_password_confirm_label', 'password_confirm');?> 
            <?php //echo form_input($password_confirm);?>
      </li>
	   <li>
      <?php echo form_submit('submit', lang('create_user_submit_btn'),'class = "submit"');?>
      </li>
      </ul>
      

<?php echo form_close();?>
</div></div></div></div>