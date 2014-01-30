<html><head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jjquery-ui.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
</head>
<body>
<div class="wrapper">
<script type="text/javascript">
        $(document).ready(function() {
	var oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": '<?php echo base_url(); ?>index.php/member/datatable',
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                "iDisplayStart ":20,
                "oLanguage": {
            "sProcessing": ""
        },  
        "fnInitComplete": function() {
                //oTable.fnAdjustColumnSizing();
         },
                'fnServerData': function(sSource, aoData, fnCallback)
            {
              $.ajax
              ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
              });
            }
	} );
} );
</script>

    </div>
</body>
<? $this->load->view('includes/dash_header');
	$this->load->helper('html');
	$this->load->library('pagination'); ?>
<!-- BEGIN Container -->

<!--<div class="container-fluid" id="main-container">
  <!-- BEGIN Sidebar -->
 <!-- <div id="sidebar" class="nav-collapse">
    <!-- BEGIN Navlist -->
  <!--  <ul class="nav nav-list">
      <!-- BEGIN Search Form -->
    <!--  <li>
        <form target="#" method="GET" class="search-form">
          <span class="search-pan">
          <button type="submit"> <i class="icon-search"></i> </button>
          <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
          </span>
        </form>
      </li>
      <!-- END Search Form -->
     <!-- <li> <a href="<?php echo base_url().'index.php/dashboard'?>"> <i class="icon-dashboard"></i> <span>Dashboard</span> </a> </li>
      <li class="active"> <a href="<?php echo base_url().'index.php/member'?>" class="dropdown-toggle"> <i class="icon-desktop"></i> <span>Members</span> <b class="arrow icon-angle-right"></b> </a>
        <!-- BEGIN Submenu -->
       <!-- <ul class="submenu">
          <li>
            <?php // echo anchor('event/create/','Add Event');?>
          </li>
          <li class="active">
            <?php //echo anchor('event','Manage Event');?>
          </li>
        </ul>
        <!-- END Submenu -->
    <!--  </li>
      <li> <a href="<?php echo base_url().'index.php/payment'?>" class="dropdown-toggle"> <i class="icon-desktop"></i> <span>Payment</span> <b class="arrow icon-angle-right"></b> </a> </li>
      <li> <a href="<?php echo base_url().'index.php/invoice'?>" class="dropdown-toggle"> <i class="icon-desktop"></i> <span>Invoice</span> <b class="arrow icon-angle-right"></b> </a> </li>
      <li> <a href="#" class="dropdown-toggle"> <i class="icon-file"></i> <span>Settings</span> <b class="arrow icon-angle-right"></b> </a>
        <!-- BEGIN Submenu -->
       <!-- <ul class="submenu">
          <li><?php echo anchor('setting/edit/','General');?></li>
          <li><?php echo anchor('auth/edit_user/','Account Setting');?></li>
          <li><?php echo anchor('setting/users/','Users Accounts');?></li>
          <li><?php echo anchor('billing','Billing');?></li>
          <li><?php echo anchor('billing/booking/','Bookings');?></li>
        </ul>
        <!-- END Submenu -->
    <!--  </li>
    </ul>
    <!-- END Navlist -->
    <!-- BEGIN Sidebar Collapse Button -->
   <!-- <div id="sidebar-collapse" class="visible-desktop"> <i class="icon-double-angle-left"></i> </div>
    <!-- END Sidebar Collapse Button -->
  <!--</div>-->
  <!-- END Sidebar -->
  <!-- BEGIN Content -->
 <!-- <div id="main-content">
    <!-- BEGIN Page Title -->
  <!--  <div class="page-title">
      <div>
        <h1><i class="icon-file-alt"></i>Members Details</h1>
        <!--<h4>Dynamic tables by DataTables</h4>-->
   <!--   </div>
    </div>
    <!-- END Page Title -->
	<div id="page-wrapper">
    <!-- BEGIN Breadcrumb -->
    <div id="breadcrumbs">
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
					
                </div>
    </div>
    <!-- END Breadcrumb -->
    <!-- BEGIN Main Content -->
   

        <div class="row">
          <div class="col-lg-12">
            <h3><i class="icon-table"></i>Members Details</h3>
            <div class="box-tool"> <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a> <a data-action="close" href="#"><i class="icon-remove"></i></a> </div>
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
        </div>
		<div class="table-responsive"> <a class="btn btn-circle show-tooltip" title="Add new member" href="<?php echo base_url().'index.php/member/add_member'?>">Add New Member</a>              
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
                                    <li class="active"><a href="#tab-2-1" data-toggle="tab">All</a></li>
                                    <li><a href="#tab-2-2" data-toggle="tab">Active</a></li>
                                    <li><a href="#tab-2-3" data-toggle="tab">Inactive</a></li>
                                </ul>
                            </div>
							<div class="box-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-2-1">
                                         <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                </div></div> 
								 
         <div class="row">
          <div class="col-lg-9">    
            <table class="table table-bordered table-hover tablesorter" id="big_table" >
              <thead>
                <tr>
                 <!-- <th style="width:18px"></th>-->
                  <th class="text-center">First Name</th>
                  <th class="text-center">Last Name</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Phone</th>
                  <th class="text-center">Membership</th>
                  <th class="text-center">Status</th>
                  <th class="text-center" style="width:100px">Action</th>
				    <?php echo $this->table->generate(); ?>
                </tr>
              </thead>
              <tbody>
			   <?php //foreach($rs as $rs){ ?>
                <?php foreach($query as $row){ ?>
                <tr class="table-flag-blue">
                 <!--<td></td>-->
                  <td><?php //echo $row->first_name; ?></td>
                  <td><?php // echo $row->last_name; ?></td>
                  <td><?php //echo $row->email; ?></td>
                  <td class="text-center"><?php //echo $row->phone; ?></td>
                  <td><?php //echo $row->membership_type; ?></td>
                  <td><?php //echo $row->status; ?></td><?php //} ?>  
				 
                <!--  <td> <a title="View" href="<?php //echo base_url().'index.php/member/single_view/' .$row->id;?>">View</a> <a title="Edit" href="<?php //echo base_url().'index.php/member/edit/' .$row->id;?>">Edit</a> <a title="Delete" href="<?php //echo base_url().'index.php/member/delete/' .$row->id;?>">Delete</a> </td>-->
                </tr>
                <?php } ?>
              </tbody>
            </table>
			<?php echo $links; ?>
			
          </div>
        </div>
                                              </div>
											  
											  
											   <div class="tab-pane" id="tab-2-2">
                                         <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                </div></div> 
								<div class="row">
                                          <div class="col-lg-9">  
										<table class="table table-bordered table-hover tablesorter" id="big_table" >
											  <thead>
												<tr>
												  <th>First Name</th>
												  <th>Last Name</th>
												  <th>Email</th>
												  <th class="text-center">Phone</th>
												  <th>Membership</th>
												  <th>Status</th>
												  <th style="width:100px">Action</th>
												   <?php //echo $this->table->generate(); ?>
												</tr>
											  </thead>
											  <tbody>
                                                     <?php foreach($user as $row){ ?>
														<tr class="table-flag-blue">
															
															<td><?php echo $row->first_name; ?></td>
															<td><?php echo $row->last_name; ?></td>
															<td><?php echo $row->email; ?></td>
															<td class="text-center"><?php echo $row->phone; ?></td>
                  <td><?php echo $row->membership_type; ?></td>
															<td><?php echo $row->status; ?></td>
															<td><a title="Edit" href="<?php echo base_url().'index.php/member/edit/' .$row->id;?>">Edit</a> <a title="Delete" href="<?php echo base_url().'index.php/member/delete/' .$row->id;?>">Delete</a> </td>
        </tr><?php } ?>
                                                        
                                                    </tbody>
                                                </table>
                                    </div></div></div>
                                    
                                    
                                    <div class="tab-pane" id="tab-2-3">
                                         <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                </div></div> 
									<div class="row">
                                          <div class="col-lg-9">  
                                               <table class="table table-bordered table-hover tablesorter" id="big_table" >
											  <thead>
												<tr>
												  <th>First Name</th>
												  <th>Last Name</th>
												  <th>Email</th>
												  <th class="text-center">Phone</th>
												  <th>Membership</th>
												  <th>Status</th>
												  <th style="width:100px">Action</th>
												</tr>
											  </thead>
											  <tbody>
                                                   <?php foreach($result as $row){ ?>
													<tr class="table-flag-blue">
													 <!--<td></td>-->
													  <td><?php echo $row->first_name; ?></td>
													  <td><?php echo $row->last_name; ?></td>
													  <td><?php echo $row->email; ?></td>
													  <td class="text-center"><?php echo $row->phone; ?></td>
													  <td><?php echo $row->membership_type; ?></td>
													  <td><?php echo $row->status; ?></td><?php //} ?>  
													 
													  <td><a title="Edit" href="<?php echo base_url().'index.php/member/edit/' .$row->id;?>">Edit</a> <a title="Delete" href="<?php echo base_url().'index.php/member/delete/' .$row->id;?>">Delete</a> </td>
													</tr>
													<?php } ?>
                                                        
                                                    </tbody>
                                                </table>
                                    </div></div>
							
                        </div>
                    </div>
           
      </div>
    </div>
    <!-- END Main Content -->
    
    <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a> </div>
  <!-- END Content -->
</div>
<!-- END Container -->
