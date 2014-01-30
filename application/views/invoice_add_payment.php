<?php if (!$this->ion_auth->logged_in())
		{
			redirect('auth', 'refresh');
		}
		/*else{
			redirect('welcome', 'refresh');
			}*/
?>

<? $this->load->view('includes/dash_header');
	$this->load->helper('html'); ?>

<div id="page-wrapper">
            
            <!-- BEGIN Content -->
           
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
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
                </div>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="<?php echo base_url().'index.php/dashboard'?>">Dashboard</a>
                            <span class="divider"><i class="icon-angle-right"></i></span>
                        </li>
                        <li class="active">Member Details</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
             <form role="form" method="post">
			 <div class="row">
          <div class="col-lg-5">
                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box box-gray">
                            <div class="box-title">
                                <h3><i class="icon-th-list"></i>Member Details</h3>
                                
                            </div>
                            <div class="box-content">
                                <div class="row-fluid">
                                    <div class="span6">
                                        <h4>Invoice : <?php echo $result->invoiceID;?></h4>
										<h4>Amount : <?php echo "$".$result->amount;?></h4>
										<div class="form-group">
										<h4>Payment Method :  <?php $payment_method = array(
										  			'Check' => 'Check',
										  			'cash'=>'Cash',
													'credit_card'=>'Credit Card',
													'paypal'=>'Paypal');?>
                <?php echo form_dropdown('payment_method',$payment_method,'','class="form-control"');?> </h4></div>
                                    </div>
                                </div>
                            </div></div></div>
							 <input type="submit" class="btn btn-primary" name="submit" value="Pay">
							</form>
							
							</div></div></div></div>
            
            
            
            
            
            
            
            
            
            
            
	