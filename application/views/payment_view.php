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
		"sAjaxSource": '<?php echo base_url(); ?>index.php/payment/datatable',
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
<?  $this->load->view('includes/dash_header');
	$this->load->helper('html');
	$this->load->library('pagination'); ?>
<!-- BEGIN Container -->

<div id="page-wrapper">
    <!-- END Page Title -->
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
					<ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="<?php echo base_url().'index.php/dashboard'?>">Dashboard</a>
                            <span class="divider"><i class="icon-angle-right"></i></span>
                        </li>
                        <li class="active">Payment Details</li>
                    </ul>
                </div>
    </div>
    <!-- END Breadcrumb -->
    <!-- BEGIN Main Content -->
     <div class="row">
          <div class="col-lg-9">
            <h3>Payment Details</h3>
           
          </div>
          <div class="row">
          <div class="col-lg-9"> <!--<a class="btn btn-circle show-tooltip" title="Add new data" href="<?php //echo base_url().'index.php/payment/add_payment'?>">
                <!--<i class="icon-plus"></i>-->
               <!-- Add New Data</a>
                <!--<a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="icon-edit"></i></a>-->
                <!--<a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="icon-trash"></i></a>-->
             
              <!--<div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="icon-print"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="icon-file-text-alt"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="icon-table"></i></a>
                                    </div>-->
              <!--<div class="btn-group"> <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a> </div>-->
            
            <table class="table table-bordered table-hover tablesorter" id="big_table">
              <thead>
                <tr>
                 <!-- <th style="width:18px"><input type="checkbox" /></th>-->
                  <th class="text-center">First Name</th>
                  <th class="text-center">Last Name</th>
                  <th class="text-center">Membership</th>
                  <th class="text-center">Amount</th>
				  <th class="text-center">Invoice</th>
                  <th class="text-center">Date</th>
                  <th class="text-center">Payment Method</th>
				  <th class="text-center">Action</th>
				  
				   <?php echo $this->table->generate(); ?>
                </tr>
              </thead>
              <tbody>
                <?php foreach($query as $row){ ?>
                <tr class="table-flag-blue">
                 <!-- <td><input type="checkbox" /></td>-->
                  <td><?php //echo $row->first_name; ?></td>
                  <td><?php //echo $row->last_name; ?></td>
                  <td><?php //echo $row->membership_type; ?></td>
                  <td class="text-center"><?php //echo "$".$row->amount; ?></td>
                  <td><?php //echo $row->invoice; ?></td>
                  <td><?php //echo $row->payment_date; ?></td>
				  <td><?php //echo $row->payment_method; ?></td>
                  <td> <!--<a class="btn btn-small show-tooltip" title="View" href="<?php echo base_url().'index.php/payment/single_payment_view/' .$row->id;?>"><i class="icon-zoom-in"></i></a>--> <a title="Edit" href="<?php echo base_url().'index.php/payment/edit/' .$row->id;?>">Edit</a>&nbsp;&nbsp; <a title="Delete" href="<?php echo base_url().'index.php/payment/delete/' .$row->id;?>">Delete</a> </div></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
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
</html>