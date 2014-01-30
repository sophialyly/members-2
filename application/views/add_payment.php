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
									<li><a href="#"> Membership</a></li>
									<li><a href="<?php echo base_url().'index.php/member'?>"> Members</a></li>
									<li><a href="#"> setting</a></li>
									<li><a href="#"> Help</a></li>
                    </ul>
      <ul class="breadcrumb">
        <li> <i class="icon-home"></i> <a href="index.html">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
        <li class="active">Add New Data</li>
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
            <h3>Add New Data</h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
          </div>
          <div class="box-content"> <?php echo form_open("payment/add_payment",array('class'=>'form-horizontal')); ?>
            <!--<div class="control-group">
              <label class="control-label">First Name</label>
              <div class="controls"> <?php echo form_input('first_name'); //echo form_input('first_name',$ffirstname);?>
                <!-- <input type="text"  class="input-xlarge" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Last Name</label>
              <div class="controls"> <?php echo form_input('last_name');?> </div>
            </div>-->
            <div class="form-group">
              <label>Membership</label>
               <?php $membership = array(
										  			'Select' => 'Please Select',
										  			/*'30days'=>'30 days',
													'1month'=>'1 Month'*/);?>
													
						<?php echo form_dropdown('membership_type',$membership);?> </div>
            </div>
            <div class="form-group">
              <label>Amount</label>
              <div class="input-prepend input-append"><span class="add-on">$</span>
 <?php echo form_input('amount');?></div>

            </div>
            <div class="form-group">
              <label>Invoice</label>
              <?php echo form_input('invoice');?> </div>
            </div>
            <div class="form-group">
              <label>Date</label>
               <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                  <input class="date-picker" size="16" type="text" name="payment_date" value=""/>
                  <span class="add-on"><i class="icon-calendar"></i></span> </div>
              </div><?php //echo form_input($payment_date);?> 
            
            <div class="form-group">
              <label>Payment Method</label>
               <?php $payment_method = array(
										  			'Select' => 'Please Select',
										  			'Paypal'=>'Paypal',
													'CreditCard'=>'Credit Card',
													'Cash'=>'Cash');?>
									 <?php echo form_dropdown('payment_method',$payment_method);?> </div>
            </div>
			<div class="form-group">
              <label>Status</label>
              
                <?php $payment_status = array('Select' => 'Please Select',
									  'peding'=>'Pending',
									  'paid'=>'Paid');?>
                <?php echo form_dropdown('payment_status',$payment_status);?> </div>
            </div>
            
            <div class="form-actions">
              <input type="submit" class="btn btn-primary" name="submit" value="Submit">
              <!--<button type="submit" name="save" class="btn btn-primary"><i class="icon-ok"></i> Save</button>-->
              <button type="button" class="btn">Cancel</button>
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
    <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a> </div>
  <!-- END Content -->
</div>
<!-- END Container -->
</body></html>