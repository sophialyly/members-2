<? $this->load->view('includes/dash_header');
	$this->load->helper('html');
	$this->load->library('pagination'); ?>


        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <li>
                        <form target="#" method="GET" class="search-form">
                            <span class="search-pan">
                                <button type="submit">
                                    <i class="icon-search"></i>
                                </button>
                                <input type="text" name="search" placeholder="Search ..." autocomplete="off" />
                            </span>
                        </form>
                    </li>
                    <!-- END Search Form -->
                    <li>
                        <a href="<?php echo base_url().'index.php/dashboard'?>">
                            <i class="icon-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
					<li class="active">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span>Events</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><?php echo anchor('event/add_member/','Add Member');?></li>
                            <li class="active"><?php echo anchor('member','Manage Member');?></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="<?php //echo base_url().'index.php/event/calendar'?>">
                            <i class="icon-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="icon-picture"></i>
                            <span>Gallery</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-file"></i>
                            <span>Settings</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                        	  <li><?php echo anchor('setting/edit/','General');?></li>
                            <li><?php echo anchor('auth/edit_user/','Account Setting');?></li>
                            <li><?php echo anchor('setting/users/','Users Accounts');?></li>
                            <li><?php echo anchor('billing','Billing');?></li>
                            <li><?php echo anchor('billing/booking/','Bookings');?></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-desktop">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->
            
             <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i>Event Manage</h1>
                        <!--<h4>Dynamic tables by DataTables</h4>-->
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.html">Dashboard</a>
                            <span class="divider"><i class="icon-angle-right"></i></span>
                        </li>
                        <li class="active">Member</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="icon-table"></i>Manage Member</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <div class="btn-toolbar pull-right clearfix">
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Add new record" href="<?php echo base_url().'index.php/member/add_member'?>"><i class="icon-plus"></i></a>
                                        <!--<a class="btn btn-circle show-tooltip" title="Edit selected" href="#"><i class="icon-edit"></i></a>-->
                                        <!--<a class="btn btn-circle show-tooltip" title="Delete selected" href="#"><i class="icon-trash"></i></a>-->
                                    </div>
                                    <!--<div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Print" href="#"><i class="icon-print"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to PDF" href="#"><i class="icon-file-text-alt"></i></a>
                                        <a class="btn btn-circle show-tooltip" title="Export to Exel" href="#"><i class="icon-table"></i></a>
                                    </div>-->
                                    <div class="btn-group">
                                        <a class="btn btn-circle show-tooltip" title="Refresh" href="#"><i class="icon-repeat"></i></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
<table class="table table-advance" id="table1">
    <thead>
        <tr>
            <th style="width:18px"><input type="checkbox" /></th>
            <th>Name</th>
            <th>Description</th>
            <th>Date</th>
            <th class="text-center">Time</th>
            <th>City</th>
            <th>Picture</th>
            <th style="width:100px">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($query as $row){ ?>
        <tr class="table-flag-blue">
            <td><input type="checkbox" /></td>
            <td><?php echo $row->first_name; ?></td>
            <td><?php echo $row->description; ?></td>
            <td><?php echo $row->date; ?></td>
            <td class="text-center"><?php echo $row->time; ?></td>
            <td><?php echo $row->city; ?></td>
            <td><img src="<?php print base_url().'assets/images/'.$row->image_path; ?>" width="80" height="80" /> <?php //echo $row->image_path; ?></td>
            <td>
                <div class="btn-group">
                    <a class="btn btn-small show-tooltip" title="View" href="<?php echo base_url().'index.php/member/single_member/' .$row->uid;?>"><i class="icon-zoom-in"></i></a>
                    <a class="btn btn-small show-tooltip" title="Edit" href="<?php echo base_url().'index.php/member/edit/' .$row->id;?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-small btn-danger show-tooltip" title="Delete" href="<?php echo base_url().'index.php/member/delete/' .$row->uid;?>"><i class="icon-trash"></i></a>
                </div>
            </td>
        </tr><?php } ?>
        
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

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->

            
            
            
            
            
            
	