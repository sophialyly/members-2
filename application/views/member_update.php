<? $this->load->view('includes/dash_header'); ?>
 
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
	   <li> <i class="icon-home"></i> <a href="<?php echo base_url().'index.php/dashboard' ?>">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
      <li class="active"></i>Edit Members</li>
    </ul>
	
  </div>
  <!-- END Breadcrumb -->
  <!-- BEGIN Main Content -->
  <div class="row">
          <div class="col-lg-5">

            <form role="form" method="post" enctype="multipart/form-data">

             
      
          <div class="box-content">
          <h3>Update Members</h3>
          
        
        <?php 
echo form_open_multipart('member/edit',array('class'=>'form-horizontal'));
echo form_hidden('id',$fid['value']); ?>
        <?php 
	$first_name= '';
	$last_name = '';
	$email = '';
	$password = '';
	$phone = '';
	$street1 = '';
	$street2 = '';
	$city = '';
	$state = '';
	$zip = '';
	$membership_type = '';
	$expired_on = '';
	$status = '';
	$recuring_payments = '';
	$photo = '';
	
 ?>
        <div class="form-group">
          <label>First Name<font color="#FF0000"> *</font></label>
              <font color="#FF0000"><?php echo form_error('first_name'); ?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'first_name');?>
              <?php echo   form_input($attributes,set_value('first_name',$ffirst_name['value'])); ?>
          
        </div>
        <div class="form-group">
          <label>Last Name<font color="#FF0000"> *</font></label>
          <font color="#FF0000"><?php echo form_error('last_name'); ?></font>
		   <?php $attributes = array('class' => 'form-control','name'=>'last_name');?>
           <?php echo $last_name . form_input($attributes,set_value('last_name',$flast_name['value']));?> 
        </div>
        <div class="form-group">
          <label>Email<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('email'); ?></font>
		  <?php $attributes = array('class' => 'form-control','name'=>'email');?>
           <?php echo $email .  form_input($attributes,set_value('email',$femail['value'])); ?>
         </div>
		 
        <div class="form-group">
		<font color="#FF0000"><?php echo form_error('password'); ?></font>
          <label>Password<font color="#FF0000"> *</font></label>
           <?php $attributes = array('class' => 'form-control','name'=>'password');?>
           <?php echo $password . form_password($attributes,set_value('password',$fpassword['value']));?>
              <!--<input class="timepicker-default" name="time" type="text" value="<?php //echo $ftime['value']; ?>"/>-->
              <!-- <span class="add-on"><i class="icon-time"></i></span>-->
            </div>
          
        <div class="form-group">
          <label>Phone<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('phone'); ?></font>
          <?php $attributes = array('class' => 'form-control','name'=>'phone');?>
          <?php echo $phone . form_input($attributes,set_value('phone',$fphone['value']));?> 
        </div>
        <div class="form-group">
          <label for="select" >Address</label>
		 <!-- <font color="#FF0000"><?php //echo form_error('street1'); ?></font>-->
		  <?php $attributes = array('class' => 'form-control','name'=>'street1');?>
          <?php echo $street1 . form_input($attributes,set_value('street1',$fstreet1['value']));?> 
        </div>
        <div class="form-group">
          <label for="select">Street2</label>
		   <?php $attributes = array('class' => 'form-control','name'=>'street2');?>
           <?php echo $street2 . form_input($attributes,set_value('street2',$fstreet2['value']));?> 
        </div>
        <div class="form-group">
          <label for="select" >City<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('city'); ?></font>
		  <?php $attributes = array('class' => 'form-control','name'=>'city');?>
          <?php echo $city . form_input($attributes,set_value('city',$fcity['value']));?> 
        </div>
        <div class="form-group">
          <label for="select" >State<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('state'); ?></font>
		  <?php $attributes = array('class' => 'form-control','name'=>'state');?>
         <?php echo $state . form_input($attributes,set_value('state',$fstate['value']));?> 
        </div>
        <div class="form-group">
          <label for="select">Zip<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('zip'); ?></font>
		 <?php $attributes = array('class' => 'form-control','name'=>'zip');?>
         <?php echo $zip . form_input($attributes,set_value('zip',$fzip['value']));?> 
        </div>
        <div class="form-group">
          <label for="select" >Membership Type</label>
         <?php echo form_dropdown('membership_type',$membership_types,$fmembership_type['value'],'class="form-control"'); ?>
        </div>
        <div class="form-group">
          <label for="select">Expired On<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('expired_on'); ?></font>
		   <?php $attributes = array('class' => 'form-control','name'=>'expired_on','id'=>'datepicker');?>
         <?php echo form_input($attributes,set_value('expired_on',$fexpired_on['value']));?> 
          
           <!-- <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
              <input class="date-picker" size="16" type="text" name="expired_on" value="<?php //echo $fexpired_on['value']; ?>"/>
              <span class="add-on"><i class="icon-calendar"></i></span> </div>-->
            <?php //echo $expired_on . form_input($fexpired_on);?>
          
        </div>
        <div class="form-group">
          <label for="select">Status</label>
		  <!--<font color="#FF0000"><?php //echo form_error('status'); ?></font>-->
           <?php //$attributes = array('class' => 'form-control','value'=>$fstatus['value']);?>
            <?php $sstatus = array(
										  			
										  			'activate'=>'Activate',
													'inactivate'=>'Inactivate');?>
            <?php echo $status . form_dropdown('status',$sstatus,$fstatus['value'],'class="form-control"');?> 
        </div>
        <div class="form-group">
          <label for="select" class="control-label">Recuring payments</label>
         
            <?php if($frecuring_payments['value'] == 'Yes') { $checked=TRUE; } ?>
            <?php $data = array('name' => 'recuring_payments' , 'value' => $frecuring_payments['value'],'checked' => $checked); ?>
            <?php echo $recuring_payments . form_checkbox($data);/*{ echo 'checked'=true;})*/;?> 
        </div>
        <div class="form-group">
          <label>Photo</label>
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"> <img src="<?php echo base_url().'assets/images/'.$fphoto['value'];  ?>" width="200" height="150" /> </div>
              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
              <div> <span class="btn btn-file"><span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                <input type="file" name="photo" class="default"  value="<?php echo $fphoto['value']; ?>"/>
                </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> </div>
          </div>
        </div>
         <?php echo form_submit('submit','Update','class="btn btn-default"');?>
          </li>
          <?php echo form_button('cancel','Cancel','class="btn btn-default"');?> </div>
        <?php echo form_close(); ?> 
    </div>
  </div>
</div>
