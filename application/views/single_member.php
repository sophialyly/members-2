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
                                        <h4>First Name : <?php echo $result->first_name;?></h4>
										<h4>Last Name : <?php echo $result->last_name;?></h4>
										<h4>Email : <?php echo $result->email;?></h4>
										<h4>Phone : <?php echo $result->phone;?></h4>
										<h4>Membership : <?php echo $result->membership_type;?></h4>
										<h4>Status : <?php echo $result->status;?></h4>
                                       
                                    </div>
                                    <div class="span6">
                                        <h4>Picture:</h4>
                                        <dl class="dl-horizontal">
                                            <img src="<?php print base_url().'assets/images/'.$result->photo; ?>" width="210" height="210" /> 
                                        </dl>
                                    </div>
                                </div>
                            </div>
							
							
					<div class="row-fluid">
                    <div class="span7">
                        <div class="box box-gray">
                            <div class="box-title">
                                <h3><!--<i class="icon-folder-close"></i>--></h3>
                                <div class="box-tool">
                                    <a data-action="config" data-modal="setting-modal-1" href="#"><i class="icon-gear"></i></a>
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                                <ul class="nav nav-tabs">
                                   <!-- <li class="active"><a href="#tab-2-1" data-toggle="tab">All</a></li>-->
                                    <li class="active"><a href="#tab-2-1" data-toggle="tab">Payments</a></li>
                                    <li><a href="#tab-2-2" data-toggle="tab">Invoices</a></li>
                                    <li><a href="#tab-2-3" data-toggle="tab">Activity</a></li>
                                </ul>
                            </div>
							<div class="box-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-2-1">
                                        <!--<p style="margin-bottom:-30px;"><strong>All</strong>-->
                                         <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                    <!--<div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Add new Booking" href="<?php //echo base_url().'index.php/billing/add_booking'?>"><i class="icon-plus"></i></a>
                                       
                                    </div>-->
                                   <!-- <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a>
                                    </div>-->
                                </div></div> 
                                         <div class="clearfix"></div>
                                                <table class="table table-advance" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <!--<th style="width:18px"></th>-->
                                                            <th>Amount</th>
                                                            <th>Invoice #</th>
                                                            <th>Date</th>
                                                            <th>Payment Method</th>
                                                            <!--<th style="width:100px">Action</th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($payment as $row){ ?>
                                                        <tr class="table-flag-blue">
                                                           <!-- <td><input type="checkbox" /></td>-->
                                                            <td><?php echo $row->amount; ?></td>
                                                            <td><?php echo $row->invoice; ?></td>
                                                            <td><?php echo $row->payment_date; ?></td>
                                                            <td><?php echo $row->payment_method; ?>
                                                             
                                                            </td>
                                                          <!--  <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-small show-tooltip" title="Send Confirmation" href="<?php //echo base_url().'index.php/billing/email/';?>"><i class="icon-mail-reply"></i></a>
                                                                    <a class="btn btn-small show-tooltip" title="Edit" href="<?php //echo base_url().'index.php/billing/add_booking/' .$row->id;?>"><i class="icon-edit"></i></a>
                                                                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="<?php //echo base_url().'index.php/billing/delete/' .$row->id;?>"><i class="icon-trash"></i></a>
                                                                </div>
                                                            </td>-->
                                                        </tr><?php } ?>
                                                        
                                                    </tbody>
                                                </table></p>
                                              </div>
											  
											  
											   <div class="tab-pane" id="tab-2-2">
                                         <p style="margin-bottom:-30px;"><!--<strong>Confirmed</strong>-->
                                         <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                    <!--<div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Add new Booking" href="<?php //echo base_url().'index.php/billing/add_booking'?>"><i class="icon-plus"></i></a>
                                    </div>-->
                                    <!--<div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a>
                                    </div>-->
                                </div></div> 
                                         <div class="clearfix"></div>
                                                <table class="table table-advance" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <!--<th style="width:18px"><input type="checkbox" /></th>-->
                                                            <th>Invoices #</th>
                                                            <th>Amount</th>
                                                            <th>Issued Date</th>
                                                            <th>Status</th>
                                                            <!--<th style="width:100px">Action</th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($invoice as $row){ ?>
                                                        <tr class="table-flag-blue">
                                                            <!--<td><input type="checkbox" /></td>-->
                                                            <td><?php echo $row->invoiceID; ?></td>
                                                            <td><?php echo "$".$row->amount; ?></td>
                                                            <td><?php echo $row->date_issued ; ?></td>
                                                            <td><?php echo $row->status; ?></td>
                                                            <!--<td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-small show-tooltip" title="Send Confirmation" href="<?php // echo base_url().'index.php/event/single_view/' .$row->uid;?>"><i class="icon-mail-reply"></i></a>
                                                                    <a class="btn btn-small show-tooltip" title="Edit" href="<?php //echo base_url().'index.php/billing/add_booking/' .$row->id;?>"><i class="icon-edit"></i></a>
                                                                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="<?php //echo base_url().'index.php/billing/delete/' .$row->id;?>"><i class="icon-trash"></i></a>
                                                                </div>
                                                            </td>-->
                                                        </tr><?php } ?>
                                                        
                                                    </tbody>
                                                </table></p>
                                    </div>
                                    
                                    
                                    <div class="tab-pane" id="tab-2-3">
                                      <p style="margin-bottom:-30px;"><!--<strong>Pending</strong>-->
                                         <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                    <!--<div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Add new Booking" href="<?php echo base_url().'index.php/billing/add_booking'?>"><i class="icon-plus"></i></a>
                                    </div>
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a>
                                    </div>-->
                                </div></div> 
                                         <div class="clearfix"></div>
                                                <table class="table table-advance" id="table1">
                                                    <thead>
                                                        <tr>
                                                           <!-- <th style="width:18px"></th>-->
                                                            <th>Amount</th>
                                                            <th>Invoices #</th>
                                                            <th>Date</th>
                                                            <th>Payment Method</th>
                                                            <!--<th style="width:100px">Action</th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach($pending as $row){ ?>
                                                        <tr class="table-flag-blue">
                                                            <td><input type="checkbox" /></td>
                                                            <td><?php echo $row->name; ?></td>
                                                            <td><?php echo $row->ticket; ?></td>
                                                            <td><?php echo "$".$row->price; ?></td>
                                                            <td><?php echo $row->status;?></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a class="btn btn-small show-tooltip" title="Send Confirmation" href="<?php echo base_url().'index.php/event/single_view/' .$row->uid;?>"><i class="icon-mail-reply"></i></a>
                                                                    <a class="btn btn-small show-tooltip" title="Edit" href="<?php echo base_url().'index.php/billing/add_booking/' .$row->id;?>"><i class="icon-edit"></i></a>
                                                                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="<?php echo base_url().'index.php/billing/delete/' .$row->id;?>"><i class="icon-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr><?php } ?>
                                                        
                                                    </tbody>
                                                </table></p>  
                                    </div>
							
                        </div>
                    </div>
                </div>

                <!-- END Main Content -->
            
            
            
            
            
            
            
            
            
            
            
	