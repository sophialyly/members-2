<?php if (!$this->ion_auth->logged_in())
		{
			redirect('auth', 'refresh');
		}
		/*else{
			redirect('welcome', 'refresh');
			}*/
?>
<? $this->load->view('includes/dash_header'); 
$this->load->helper('html');?>

<div id="page-wrapper">
    
    <div id="breadcrumbs">
	<ul class="breadcrumb">
                        <li class="active"><i class="icon-file-alt"></i><a href="<?php echo base_url().'index.php/dashboard'?>"> Dashboard</a></li>
									<li><a href="<?php echo base_url().'index.php/payment'?>"> Payment</a></li>
									<li><a href="<?php echo base_url().'index.php/invoice'?>"> Invoice</a></li>
									<li><a href="<?php echo base_url().'index.php/membership'?>"> Membership</a></li>
									<li><a href="<?php echo base_url().'index.php/member'?>"> Members</a></li>
									<li><a href="#"> setting</a></li>
									<li><a href="#"> Help</a></li>
                    </ul>
					<ul class="breadcrumb">
        <li> <i class="icon-home"></i> <a href="<?php echo base_url().'index.php/dashboard' ?>">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
        <li class="active">Add New Member</li>
      </ul>
     
    </div>
    <!-- END Breadcrumb -->
    <?php
	//$first_name = ''; ?>
    <!-- BEGIN Main Content -->
    <div class="row">
          <div class="col-lg-5">

            <form role="form" method="post" enctype="multipart/form-data">

             <div class="box-content"> 
            <h3>Add New Member</h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
          </div>
      
          <div class="box-content"> <?php echo form_open_multipart("member/add_member",array('class'=>'form-horizontal')); ?>
             <div class="form-group">
              <label>First Name <font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('first_name'); ?></font>
			   <?php $attributes = array('class' => 'form-control','name'=>'first_name');?>
               <?php echo form_input($attributes,set_value('first_name'));?>
               
              </div>
            
            <div class="form-group">
              <label>Last Name<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('last_name'); ?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'last_name');?>
              <?php echo form_input($attributes,set_value('last_name'));?> 
            </div>
             <div class="form-group">
              <label>Email<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('email'); ?></font>
			 <?php $attributes = array('class' => 'form-control','name'=>'email');?>
              <?php echo form_input($attributes,set_value('email'));?>
            </div>
           <div class="form-group">
              <label>Password<font color="#FF0000"> *</font></label>
			   <font color="#FF0000"><?php echo form_error('password'); ?></font>
			 <?php $attributes = array('class' => 'form-control','name'=>'password');?>
             <?php echo form_password($attributes,set_value('password'));?>
            </div>
           <div class="form-group">
              <label>Phone<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('phone'); ?></font>
			 <?php $attributes = array('class' => 'form-control','name'=>'phone');?>
             <?php echo form_input($attributes,set_value('phone'));?> 
            </div>
            <div class="form-group">
              <label>Address</label>
             
              <?php $attributes = array('class' => 'form-control','name'=>'street1','rows'=>'3');?>
              <?php echo form_textarea($attributes,set_value('street1'));?> 
            </div>
            <div class="form-group">
              <label>Street 2</label>
			  <?php $attributes = array('class' => 'form-control','name'=>'street2');?>
              <?php echo form_input($attributes,set_value('street2'));?>
            </div>
           <div class="form-group">
              <label>City<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('city'); ?></font>
			   <?php $attributes = array('class' => 'form-control','name'=>'city');?>
               <?php echo form_input($attributes,set_value('city'));?> 
            </div>
            <div class="form-group">
              <label>State<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('state'); ?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'state');?>
               <?php echo form_input($attributes,set_value('state'));?> 
            </div>
            <div class="form-group">
              <label>Zip<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('zip'); ?></font>
			   <?php $attributes = array('class' => 'form-control','name'=>'zip');?>
               <?php echo form_input($attributes,set_value('zip'));?> 
            </div>
             <div class="form-group">
              <label>Membership Type</label>
			  	<!--<font color="#FF0000"><?php //echo form_error('membership_type'); ?></font>-->
				<?php //$attributes = array('class' => 'form-control','name'=>'membership_type');?>
                <?php //$membership_type = array(
										  			//'Select' => 'Please Select',
										  			//'basic_pakage'=>'Basic Package',
													//'budget_pakage'=>'Budget Package');?>
                <?php echo form_dropdown('membership_type',$membership_type,'','class="form-control"'); ?> 
            </div>
			
              <div class="form-group">
              <label>Expired On<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"> <?php echo form_error('expired_on'); ?></font>
				 <?php $attributes = array('class' => 'form-control','name'=>'expired_on','id'=>'datepicker');?>	
				  <?php echo form_input($attributes,set_value('expired_on'));?> 
            </div>
            <div class="form-group">
              <label>Status<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"> <?php echo form_error('status'); ?></font>
              <?php //$attributes = array('class' => 'form-control','name'=>'status');?>
			  
                <?php $status = array(
										  			'0' => 'Please Select',
										  			'activate'=>'Activate',
													'inactivate'=>'Inactivate');?>
                <?php echo form_dropdown('status',$status,set_value('status'),'class="form-control"');?> </div>
            <div class="form-group">
              <label>Recuring Payments</label>
			   <?php $attributes = array('name'=>'recuring_payments');?>
               <?php echo form_checkbox($attributes);?> </div>
            
           <div class="form-group">
              <label>Photo</label>
			  <?php $attributes = array('name'=>'photo','class' => 'form-control');?>
              <?php echo form_upload($attributes,set_value('photo'));?> 
		   </div>

            <div class="form-group input-group">
              <label>Amount</label>
			  <span class="input-group-addon">$</span>
			  	<font color="#FF0000"><?php echo form_error('Amount'); ?></font>
				<?php $attributes = array('class' => 'form-control','name'=>'amount');?>
              <?php echo form_input($attributes,set_value('amount'));?> 
            </div>
			<div class="form-group">
              <label>Invoice<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('invoice'); ?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'invoice');?>
             <?php echo form_input($attributes,set_value('invoice'));?> 
            </div>
			<div class="form-group">
              <label>Payment Date<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('payment_date'); ?></font>
              
               <!-- <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">-->
				  <?php $attributes = array('class' => 'form-control','name'=>'payment_date','id'=>'datepicker1');?>
				   <?php echo form_input($attributes,set_value('payment_date'));?> 
                  <!--<input class="date-picker" size="16" type="text" name="payment_date" value=""/>
                  <span class="add-on"><i class="icon-calendar"></i></span> 
              </div>-->
            </div>
			<div class="form-group">
              <label>Due Date<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('due_date'); ?></font>
              
                <!--<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">-->
				 <?php $attributes = array('class' => 'form-control','name'=>'due_date','id'=>'datepicker2');?>
				  <?php echo form_input($attributes,set_value('due_date'));?> 
                  <!--<input class="date-picker" size="16" type="text" name="due_date" value=""/>
                  <span class="add-on"><i class="icon-calendar"></i></span> 
              </div>-->
            </div>
			<div class="form-group">
              <label>Payment Method<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"> <?php echo form_error('payment_method'); ?></font>
               <?php //$attributes = array('class' => 'form-control','name'=>'payment_method');?>
			  
                <?php $payment_method = array(
										  			'0' => 'Please Select',
										  			'cash'=>'Cash',
													'credit_card'=>'Credit Card',
													'paypal'=>'Paypal');?>
                <?php echo form_dropdown('payment_method',$payment_method,set_value('payment_method'),'class="form-control"');?> 
            </div>
			<div class="form-group">
			<label>Payment Status<font color="#FF0000"> *</font></label>
			<font color="#FF0000"><?php echo form_error('payment_status'); ?></font>
			<div class="controls">
			    <?php $attributes = array('class' => 'form-control','name'=>'payment_status');?>
                <?php $payment_status = array(
										  			'0' => 'Please Select',
										  			'received'=>'Received',
													'overdue'=>'Overdue',
													'pending'=>'pending');?>
                <?php echo form_dropdown('payment_status',$payment_status,set_value('payment_status'),'class="form-control"');?> </div>
            </div>
            <input type="submit" name="submit" class="btn btn-default" value="Submit">
              <button type="reset" class="btn btn-default">cancel</button> 
          </div>
        </div>
      </div>
    </div>
    <!-- END Main Content -->
    <!--<footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>-->
    <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a> </div>
  <!-- END Content -->
</div>
<!-- END Container -->
</body></html>