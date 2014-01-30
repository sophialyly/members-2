<? $this->load->view('includes/dash_header'); ?>
<!-- BEGIN Container -->


 <div id="page-wrapper">
  <!-- BEGIN Page Title -->
  
  <!-- END Page Title -->
  <!-- BEGIN Breadcrumb -->
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
	<li> <i class="icon-home"></i> <a href="<?php echo base_url().'index.php/dashboard'?>">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
      <li class="active"></i>Edit Payment Detail</li>
    </ul>
  </div>
  <!-- END Breadcrumb -->
  <!-- BEGIN Main Content -->
   <div class="row">
          <div class="col-lg-5">

            <form role="form" method="post">

             
      
          <div class="box-content">
          <h3>Update Payment Detail</h3>
          <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
        </div>
        <?php 
echo form_open('payment/edit',array('class'=>'form-horizontal'));
echo form_hidden('id',$fid['value']); ?>
        <?php 
	$first_name= '';
	$last_name = '';
	$membership_type = '';
	$amount = '';
	$invoice = '';
	$payment_date = '';
	$payment_method = '';
	
	
 ?>
        <div class="form-group">
          <label>First Name<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('first_name'); ?></font>
            <?php $attributes = array('class' => 'form-control','name'=>'first_name');?>
              <?php echo $first_name .  form_input($attributes,set_value('first_name',$ffirst_name['value'])); ?> 
        </div>
        <div class="form-group">
          <label>Last Name<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('last_name'); ?></font>
           <?php $attributes = array('class' => 'form-control','name'=>'last_name');?>
          <?php echo $last_name . form_input($attributes,set_value('last_name',$flast_name['value']));?> 
        </div>
        <div class="form-group">
          <label>Membership</label>			
						<?php echo form_dropdown('membership_type',$membership_types,$fmembership_type['value'],'class="form-control"'); ?>		
        </div>
        
        <div class="form-group input-group">
          <label>Amount</label>
         <span class="input-group-addon">$</span>
	<?php $attributes = array('class' => 'form-control','name'=>'amount','value'=>$famount['value']);?>
		  <?php echo $amount . form_input($attributes);?> 
		  <span class="input-group-addon">.00</span>
		  </div>
        <div class="form-group">
          <label for="select" class="control-label">Invoice<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('invoice'); ?></font>
		   <?php $attributes = array('class' => 'form-control','name'=>'invoice');?>
           <?php echo $invoice . form_input($attributes,set_value('invoice',$finvoice['value']));?> 
        </div>
        <div class="form-group">
          <label for="select" class="control-label">Date<font color="#FF0000"> *</font></label>
		   <font color="#FF0000"><?php echo form_error('payment_date'); ?></font>
         <!--<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">-->
		 <?php $attributes = array('class' => 'form-control','name'=>'payment_date','id'=>'datepicker','dateFormat'=>'yyyy-mm-dd');?>
                  <!--<input class="date-picker" size="16" type="text" name="payment_date" value="<?php //echo $fpayment_date['value']; ?>"/>-->
                  <!--<span class="add-on"><i class="icon-calendar"></i></span> </div>--> <?php echo $payment_date . form_input($attributes,set_value('payment_date',$fpayment_date['value']));?> </div>
        
        <div class="form-group">
          <label for="select" class="control-label">Payment Method</label>
          <?php $payment_methods = array(
										  			
										  			'Paypal'=>'Paypal',
													'CreditCard'=>'Credit Card',
													'Cash'=>'Cash');?>
								 <?php echo $payment_method . form_dropdown('payment_method',$payment_methods,$fpayment_method['value'],'class="form-control"');?> 
        </div>
      <div class="form-group">
              <label class="control-label">Payment Status</label>
                         <?php $payment_status = array(
										  			
										  			'pending'=>'Pending',
													'paid'=>'Paid');?>
                <?php echo  form_dropdown('payment_status',$payment_status,$fpayment_status['value'],'class="form-control"');?> </div>
            
          </div>
        </div>
        <div class="form-actions"> <?php echo form_submit('submit','Update','class = "btn btn-primary"');?>
          </li>
          <?php echo form_button('cancel','Cancel','class = "btn"');?> </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
