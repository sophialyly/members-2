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
        <li class="active">Settings</li>
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
            <h3>Company Settings</h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
          </div>
      
          <div class="box-content"> <?php echo form_open_multipart("settings/edit",array('class'=>'form-horizontal')); echo form_hidden('id',$fid['value']); foreach($single as $row){?>
		  
              <div class="form-group">
          <label>Business Name<font color="#FF0000"> *</font></label>
              <font color="#FF0000"><?php echo form_error('business_name'); ?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'business_name');?>
              <?php echo form_input($attributes,set_value('business_name',$row->business_name)); ?>
          
        </div>
			  
             <div class="form-group">
              <label>Email<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('email'); ?></font>
			 <?php $attributes = array('class' => 'form-control','name'=>'email');?>
              <?php echo form_input($attributes,set_value('email',$row->email));?>
            </div>
			
           <div class="form-group">
              <label>Phone<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('phone'); ?></font>
			 <?php $attributes = array('class' => 'form-control','name'=>'phone');?>
             <?php echo form_input($attributes,set_value('phone',$row->phone));?> 
            </div>
            <div class="form-group">
              <label>Address</label>
             
              <?php $attributes = array('class' => 'form-control','name'=>'street1',"rows"=>3);?>
              <?php echo form_textarea($attributes,set_value('street1',$row->street1));?> 
            </div>
            <div class="form-group">
              <label>Street 2</label>
			  <?php $attributes = array('class' => 'form-control','name'=>'street2');?>
              <?php echo form_input($attributes,set_value('street2',$row->street2));?>
            </div>
           <div class="form-group">
              <label>City<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('city'); ?></font>
			   <?php $attributes = array('class' => 'form-control','name'=>'city');?>
               <?php echo form_input($attributes,set_value('city',$row->city));?> 
            </div>
            <div class="form-group">
              <label>State<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('state'); ?></font>
			  <?php $attributes = array('class' => 'form-control','name'=>'state');?>
               <?php echo form_input($attributes,set_value('state',$row->state));?> 
            </div>
            <div class="form-group">
              <label>Zip<font color="#FF0000"> *</font></label>
			  <font color="#FF0000"><?php echo form_error('zip'); ?></font>
			   <?php $attributes = array('class' => 'form-control','name'=>'zip');?>
               <?php echo form_input($attributes,set_value('zip',$row->zip));?> 
            </div>
             <div class="form-group">
              <label>Currency</label>
			  	<!--<font color="#FF0000"><?php //echo form_error('membership_type'); ?></font>-->
				<?php //$attributes = array('class' => 'form-control','name'=>'membership_type');?>
                <?php $currency = array(
										  	
										  			 		  'ARS'  => 'Argentine Peso',
															  'AUD'  => 'Australian Dollar',
															  'CAD'  => 'Canadian Dollar',
															  'Eur'  => 'Euro',
															  'INR'  => 'Indian Rupees',
															  'IDR'  => 'Indonesian Rupiah (Rp)',
															  'MYR'  => 'Malaysian Ringgit',
															  'NZD'  => 'New Zealand Dollars',
															  'CHF'  => 'Swiss France',
															  'USD'  => 'United States Dollar',
															  'JPY'  => 'Yen');?>
                <?php echo form_dropdown('currency',$currency,$row->currency,'class="form-control" id="currency"'); ?> 
            
			
           <div class="form-group">
          <label style="margin-left:15px;">Photo</label>
            
              <div class="fileupload-new thumbnail" style="width: 100px; height: 100px;"> <img src="<?php echo base_url().'assets/images/'.$row->photo;  ?>" width="100" height="100" /> </div>
              <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 100px; line-height: 20px;"></div>
              <div> <span class="btn btn-file"><span class="fileupload-new">Select image</span> <span class="fileupload-exists">Change</span>
                <input type="file" name="photo" class="default"  value="<?php echo $row->photo; ?>"/>
                </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
          </div>
        </div>

            </div>
             <?php echo form_submit('submit','Save','class="btn btn-default"');?>
              <!--<button type="reset" class="btn btn-default">cancel</button> -->
			   <? } ?>
                <?php echo form_close(); ?>
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