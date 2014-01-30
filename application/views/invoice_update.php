<? $this->load->view('includes/dash_header'); ?>
<!-- BEGIN Container -->

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
	<li> <i class="icon-home"></i> <a href="<?php echo base_url().'index.php/dashboard'?>">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
      <li class="active"></i>Edit Invoice Detail</li>
    </ul>
  </div>
  <!-- END Breadcrumb -->
  <!-- BEGIN Main Content -->
   <div class="row">
          <div class="col-lg-5">

            <form role="form" method="post">

          <div class="box-content">
          <h3>Update Invoice Detail</h3>
          <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
        </div>
        <?php 
echo form_open('invoice/edit',array('class'=>'form-horizontal'));
echo form_hidden('id',$fid['value']); ?>
        <?php 
	$invoiceID= '';
	$first_name= '';
	$last_name = '';
	$membership_type = '';
	$amount = '';
	$invoice = '';
	$payment_date = '';
	$payment_method = '';
	
	
 ?>
 		<div class="form-group">
           <label>Invoice<font color="#FF0000"> *</font></label>
		   <font color="#FF0000"><?php echo form_error('invoiceID'); ?></font>
		  <?php $attributes = array('class' => 'form-control','name'=>'invoiceID');?>
              <?php echo $invoiceID .  form_input($attributes,set_value('invoiceID',$finvoiceID['value'])); ?> 
        </div>
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
          <label>Start Date<font color="#FF0000"> *</font></label>
          <font color="#FF0000"><?php echo form_error('date_issued'); ?></font>
		  <?php $attributes = array('class' => 'form-control','name'=>'date_issued','id'=>'datepicker');?>
                 <!-- <input class="date-picker" size="16" type="text" name="date_issued" value="<?php //echo $fdate_issued['value']; ?>"/>
                  <span class="add-on"><i class="icon-calendar"></i></span> </div>--> 
				  <?php echo $payment_date . form_input($attributes,set_value('date_issued',$fdate_issued['value']));?>
        </div>
       <div class="form-group">
          <label>Membership</label>
          <?php echo form_dropdown('membership_type',$membership_types,$fmembership_type['value'],'class="form-control"'); ?>
						
            <!--<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
      		    <input class="date-picker" size="16" type="text" name="date" value="<?php //echo $fdate['value']; ?>"/>       
            <span class="add-on"><i class="icon-calendar"></i></span>
                </div>-->
          
        </div>
		<div class="form-group">
          <label>Expired On<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('end_date');?></font>
		   <?php $attributes = array('class' => 'form-control','name'=>'end_date','id'=>'datepicker1');?>
          <?php echo $last_name . form_input($attributes,set_value('end_date',$fend_date['value']));?> 
         
        </div>
        
       <div class="form-group">
          <label>Amount</label>
		  <?php $attributes = array('class' => 'form-control','name'=>'amount');?>
           <?php echo $amount . form_input($attributes,set_value('amount',$famount['value']));?> 
		</div>
		   <div class="form-group">
          <label >Status</label>
          
		  <?php $status = array(
										  			
										  			'pending'=>'Pending',
													'paid'=>'Paid');?>
													
						<?php echo form_dropdown('status',$status,$fstatus['value'],'class="form-control"');?>
						<?php //echo $membership_type .  form_input($fmembership_type); ?>
            <!--<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
      		    <input class="date-picker" size="16" type="text" name="date" value="<?php //echo $fdate['value']; ?>"/>       
            <span class="add-on"><i class="icon-calendar"></i></span>
                </div>-->
          
       
		  
       
        
        
            </div>
          </div>
        </div>
        <div class="form-actions"> <?php echo form_submit('submit','Update','class = "btn btn-primary"');?>
          </li>
          <?php echo form_button('cancel','Cancel','class = "btn"');?> </div>
        <?php echo form_close(); ?> </div>
    </div>
  </div>
</div>
