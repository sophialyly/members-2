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
        <li> <i class="icon-home"></i> <a href="<?php echo base_url().'index.php/dashboard' ?>">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
        <li class="active">Add New Invoice</li>
      </ul>
    </div>
    <!-- END Breadcrumb -->
    <?php
	//$first_name = ''; ?>
    <!-- BEGIN Main Content -->
   <div class="row">
          <div class="col-lg-5">

            <form role="form" method="post">

             
      
          <div class="box-content"> 
            <h3>Add New Invoice</h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
          </div>
          <div class="box-content"> <?php echo form_open("invoice/add_invoice",array('class'=>'form-horizontal')); ?>
            <div class="form-group">
              <label>Invoice<font color="#FF0000"> *</font></label>
			  	<font color="#FF0000"><?php echo form_error('invoiceID');?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'invoiceID');?>
              <?php echo form_input($attributes,set_value('invoiceID'));?>
                <!-- <input type="text"  class="input-xlarge" />-->
            </div>
            <div class="form-group">
              <label>First Name<font color="#FF0000"> *</font></label>
			  	<font color="#FF0000"><?php echo form_error('first_name');?></font>
				 <?php $attributes = array('class' => 'form-control','name'=>'first_name');?>
               <?php echo form_input($attributes,set_value('first_name'));?> 
            </div>
			<div class="form-group">
              <label>Last Name<font color="#FF0000"> *</font></label>
			  	<font color="#FF0000"><?php echo form_error('last_name');?></font>
				 <?php $attributes = array('class' => 'form-control','name'=>'last_name');?>
               <?php echo form_input($attributes,set_value('last_name'));?> 
            </div>
			<div class="form-group">
              <label>Start Date<font color="#FF0000"> *</font></label>
			 <font color="#FF0000"> <?php echo form_error('date_issued');?></font>
			  <?php $attributes = array('class' => 'form-control','id'=>'datepicker','name'=>'date_issued');?>
               <!--<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                  <input class="date-picker" size="16" type="text" name="date_issued" value=""/>
                  <span class="add-on"><i class="icon-calendar"></i></span> </div>-->
              <?php echo form_input($attributes,set_value('date_issued'));?> 
			  </div>
            
            <div class="form-group">
              <label >Membership</label>
			  	<font color="#FF0000"><?php echo form_error('membership_type');?></font>
              <?php //$membership = array(
										  			//'Select' => 'Please Select',
										  			/*'30days'=>'30 days',
													'1month'=>'1 Month');*/?>
													
						<?php echo form_dropdown('membership_type',$membership_type,set_value('membership_type'),'class="form-control"');?> 
            </div>
			<div class="form-group">
              <label>Expired On<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('end_date');?></font>
			   <?php $attributes = array('class' => 'form-control','id'=>'datepicker1','name'=>'end_date');?>
               <!--<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                  <input class="date-picker" size="16" type="text" name="end_date" value=""/>
                  <span class="add-on"><i class="icon-calendar"></i></span> </div>-->
              <?php echo form_input($attributes,set_value('end_date'));?> 
            </div>
            <div class="form-group input-group">
              <label class="control-label">Amount</label>
			<!--  <font color="#FF0000"><?php //echo form_error('amount');?></font>-->
			  
             <span class="input-group-addon">$</span>
			   <?php $attributes = array('class' => 'form-control','name'=>'amount');?>
 			<?php echo form_input($attributes,set_value('amount'));?>
			</div>
 			
 			 <div class="form-group">
              <label>Status<font color="#FF0000"> *</font></label>
			 <font color="#FF0000"> <?php echo form_error('status');?></font>
              <?php $status = array(
										  			'0' => 'Please Select',
										  			'pending'=>'Pending',
													'paid'=>'Paid');?>
													
						<?php echo form_dropdown('status',$status,set_value('status'),'class="form-control"');?> 
            </div>

           
            
           
           
			
            
            <div class="form-actions">
              <input type="submit" class="btn btn-primary" name="submit" value="Create">
              <!--<button type="submit" name="save" class="btn btn-primary"><i class="icon-ok"></i> Save</button>-->
              <button type="reset" class="btn" name="cancel">Cancel</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END Main Content -->
    <!--<footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>-->
    </div>
  <!-- END Content -->
</div>
<!-- END Container -->
</body></html>