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
        <li> <i class="icon-home"></i> <a href="index.html">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
        <li class="active">Add New Membership</li>
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
            <h3><i class="icon-reorder"></i>Add New Membership</h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
          </div>
          <?php echo form_open_multipart("membership/add_membership",array('class'=>'form-horizontal')); ?>
            <div class="form-group">
              <label>Membership Name<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"> <?php echo form_error('membership_type'); ?></font>
			   <?php $attributes = array('class' => 'form-control','name'=>'membership_type');?>
               
                <?php echo form_input($attributes,set_value('membership_type'));?> 
            </div>
			<!--<div class="form-group">
              <label>Membership Code</label>
			  <font color="#FF0000"><?php //echo form_error('membership_code'); ?></font>
			  <?php //$attributes = array('class' => 'form-control','name'=>'membership_code');?>
             <?php //echo form_input($attributes);?>
            </div>-->
            <div class="form-group">
              <label>Price<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('annual_fees'); ?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'annual_fees');?>
              
			  						 <?php echo form_input($attributes,set_value('annual_fees'));?> 
            </div>
            <div class="form-group">
              <label>Duration<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"> <?php echo form_error('duration'); ?></font>
			   <?php $attributes = array('class' => 'form-control','name'=>'duration');?>
                <?php /*$duration = array(
										  			'0' => 'Please Select',
										  			'14 days'=>'14 Days',
													'1 Month'=>'1 Month',
													'1 Year'=>'1 Year');*/?>
                <?php echo form_input($attributes,set_value('duration'));?>
		
			  
                <?php $days = array(
										  			'Days' => 'Days',
										  			'Month'=>'Month',
													'Years'=>'Years');?>
                <?php echo form_dropdown('days',$days,'','class="form-controll"');?> 
            </div>
              <div class="form-group">
                <label>Recuring Payment </label>&nbsp;&nbsp;
				<font color="#FF0000"><?php echo form_error('recuring_payment'); ?></font>
                <label class="radio-inline">  
				   <?php echo form_label('Yes', 'yes') . form_radio(array("name"=>"recuring_payment","id"=>"yes","value"=>"Yes")); ?></label>
				   <label class="radio-inline">
				   <?php echo form_label('No', 'no') . form_radio(array("name"=>"recuring_payment","id"=>"no","value"=>"No")); ?>
                </label>
               
              </div>
			  <div class="form-group">
                <label>Active </label>&nbsp;&nbsp;&nbsp;&nbsp;
                <label class="radio-inline">  
				   <?php echo form_label('Yes', 'yes') . form_radio(array("name"=>"active","id"=>"yes","value"=>"Yes")); ?></label>
				   <label class="radio-inline">
				   <?php echo form_label('No', 'no') . form_radio(array("name"=>"active","id"=>"no","value"=>"No")); ?>
                </label>
               
              </div>

            <!-- <div class="form-group">
              <label>Status</label>
			  <font color="#FF0000"> <?php //echo form_error('status'); ?></font>
			  
                <?php /*$status = array(
										  			'0' => 'Please Select',
										  			'activate'=>'Activate',
													'inactivate'=>'Inactivate');*/?>
                <?php //echo form_dropdown('status',$status,'','class="form-control"');?> 
            </div>-->
            
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