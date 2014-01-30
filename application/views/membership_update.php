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
	   <li> <i class="icon-home"></i> <a href="<?php echo base_url().'index.php/dashboard' ?>">Dashboard</a> <span class="divider"><i class="icon-angle-right"></i></span> </li>
      <li class="active"></i>Edit Membership</li>
    </ul>
	
  </div>
  <!-- END Breadcrumb -->
  <!-- BEGIN Main Content -->
    <div class="row">
          <div class="col-lg-5">

            <form role="form" method="post">

          <div class="box-content">
          <h3><i class="icon-reorder"></i>Update Membership</h3>
          <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
        </div>
        <?php 
echo form_open('membership/edit',array('class'=>'form-horizontal'));
echo form_hidden('id',$fid['value']); ?>
        <?php 
	$membership_type= '';
	$membership_code = '';
	$annual_fees = '';
	$duration = '';
	$active = '';
	
	
 ?>
         <div class="form-group">
          <label for="select">Membership Name<font color="#FF0000"> *</font></label>
		    <font color="#FF0000"><?php echo form_error('membership_type'); ?></font>
		   <?php $attributes = array('class' => 'form-control','name'=>'membership_type');?>
            <?php echo $membership_type . form_input($attributes,set_value('membership_type',$fmembership_type['value']));?>
        </div>
        <!--<div class="form-group">
          <label>Membership Code</label>
          <!--<font color="#FF0000"><?php //echo form_error('description'); ?></font>-->
		  <?php //$attributes = array('class' => 'form-control','name'=>'membership_code','value'=>$fmembership_code['value']);?>
           <?php //echo $membership_code . form_input($attributes);?> 
       <!--</div>-->
        <div class="form-group">
          <label>Price<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('annual_fees'); ?></font>
		   <?php $attributes = array('class' => 'form-control','name'=>'annual_fees');?>
           <?php echo $annual_fees .  form_input($attributes,set_value('annual_fees',$fannual_fees['value'])); ?>
        </div>
       
        <div class="form-group">
          <label for="select" >Duration<font color="#FF0000"> *</font></label>
		  <font color="#FF0000"><?php echo form_error('duration'); ?></font>
           <?php $attributes = array('class' => 'form-control','name'=>'duration');?>
           
            <?php echo $duration . form_input($attributes,set_value('duration',$fduration['value']));?> 
		     <?php $days = array(
										  			'Days' => 'Days',
										  			'Month'=>'Month',
													'Years'=>'Years');?>
                <?php echo form_dropdown('days',$days,$fdays['value'],'class="form-controll"');?> 
        </div>
		<div class="form-group">
          <label for="select">Recuring Payment</label>
         <font color="#FF0000"><?php echo form_error('recuring_payment'); ?></font>
                <label class="radio-inline">  
				<?php //if($frecuring_payment['value'] == 'Yes'){ $checked=TRUE; } ?>
				<input type="radio" name="recuring_payment" value="Yes" <?php if($frecuring_payment['value'] == 'Yes'){ ?> checked='checked'<? } ?> />Yes
				   <?php //echo form_label('Yes', 'yes') . form_radio(array("name"=>"recuring_payment","id"=>"yes","value"=>$frecuring_payment['value'],'checked'=>$checked)); ?></label>
				   <label class="radio-inline">
				   <input type="radio" name="recuring_payment" value="No" <?php if($frecuring_payment['value'] == 'No'){ ?> checked='checked'<? } ?> />No
				   <?php //echo form_label('No', 'no') . form_radio(array("name"=>"recuring_payment","id"=>"no","value"=>$frecuring_payment['value'],'checked'=>$checked)); ?>
                </label> 
        </div>
        <div class="form-group">
          <label for="select">Active</label>
         <font color="#FF0000"><?php echo form_error('active'); ?></font>
                <label class="radio-inline">  
				   <input type="radio" name="active" value="Yes" <?php if($factive['value'] == 'Yes'){ ?> checked='checked'<? } ?> />Yes
				   </label>
				   <label class="radio-inline">
				    <input type="radio" name="active" value="No" <?php if($factive['value'] == 'No'){ ?> checked='checked'<? } ?> />No
                </label>
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
