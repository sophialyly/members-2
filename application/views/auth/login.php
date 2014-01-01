<? $this->load->view('includes/header'); ?>
<?php $this->load->helper('html');
 $this->load->library('ion_auth'); ?>
<body class="login-page">
<div id="infoMessage"><?php echo $message;?></div>
 <!-- BEGIN Main Content -->
        <div class="login-wrapper">

            <!-- BEGIN Login Form -->
            <?php echo form_open("auth/login",array('id'=>'form-login'));?>
 			<h3>Login to your account</h3>
            <hr/>
            <div class="control-group">
               <div class="controls">
				   <?php $identity = 'placeholder="Username*"';?>
                    <?php echo form_input('identity','',$identity,'class="input-block-level"');?>
  			   </div>
     		 </div>
      		<div class="control-group">
           		<div class="controls">
				   <?php $password = 'placeholder="Password*"';?>
                   <?php echo form_password('password','',$password,'class="input-block-level"');?>
 			    </div>
            </div>
            <div class="control-group">
               <div class="controls">
                  <label class="checkbox"><?php echo form_checkbox('remember');?>
  				 <?php echo lang('login_remember_label', 'remember');?></label>
      		   </div>
            </div>
            <div class="control-group">
              <div class="controls">
                 <button type="submit" class="btn btn-primary input-block-level">Sign In</button>
   				 <?php //echo form_submit('submit',lang('login_submit_btn'),'class="btn btn-primary input-block-level"');?>
			  </div>
           </div>
                <hr/>
           <p class="clearfix">
               <?php //echo anchor('auth/forgot_password', lang('login_forgot_password'));?>
             <a href="#" class="goto-forgot pull-left">Forgot Password?</a>
               <a href="#" class="goto-register pull-right">Sign up now</a>
           </p>
			<?php echo form_close();?>
            
		<!-- END Login Form -->
 
 
  <!-- BEGIN Forgot Password Form -->
           <?php echo form_open("auth/forgot_password",array('id'=>'form-forgot','class'=>'hide'));?> 
                <h3>Get back your password</h3>
                <hr/>
                <div class="control-group">
                    <div class="controls">
                        <?php $identity_label = 'placeholder="Email"';?>
                       	<?php echo form_input('email','',$identity_label,'class="input-block-level"');?>
                        <!--<input type="text" placeholder="Email" class="input-block-level" />-->
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit"  class="btn btn-primary input-block-level">Recover</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-login pull-left">← Back to login form</a>
                </p>
            <?php echo form_close();?>
  <!-- END Forgot Password Form -->
            
             <!-- BEGIN Register Form -->
           <?php echo form_open("auth/create_user",array('class'=>'hide','id'=>'form-register'));?>
                <h3>Sign up</h3>
                <hr/>
                <div class="control-group">
                    <div class="controls">
                    	<?php $email = 'placeholder="Email"';?>
                        <?php echo form_input('email','',$email,'class="input-block-level"');?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    	 <?php $Username = 'placeholder="Username"';?>
                        <?php echo form_input('first_name','',$Username,'class="input-block-level"');?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    	<?php $password = 'placeholder="Password*"';?>
                        <?php echo form_password('password','',$password,'class="input-block-level"');?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    <?php $password_confirm = 'placeholder="Repeat Password"';?>
                    	 <?php echo form_password('password_confirm','',$password_confirm,'class="input-block-level"');?>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                    <?php //echo form_submit('submit', lang('create_user_submit_btn'),'class = "submit"');?>
                        <button type="submit" class="btn btn-primary input-block-level">Sign up</button>
                    </div>
                </div>
                <hr/>
                <p class="clearfix">
                    <a href="#" class="goto-login pull-left">← Back to login form</a>
                </p>
            <?php echo form_close();?>
            <!-- END Register Form -->
        </div>
 
<!-- END Main Content -->


</body>