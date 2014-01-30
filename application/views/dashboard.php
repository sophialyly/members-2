<?php if (!$this->ion_auth->logged_in())
		{
			redirect('auth', 'refresh');
		}
		/*else{
			redirect('welcome', 'refresh');
			}*/
?>
<? $this->load->view('includes/dash_header'); ?>

<!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <!--<ul class="nav nav-list">
                    <!-- BEGIN Search Form -->
                    <!--<li>
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
                  <!--  <li class="active">
                        <a href="<?php echo base_url().'index.php/dashboard'?>">
                            <i class="icon-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo base_url().'index.php/member'?>" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span>Memebers</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                       <!-- <ul class="submenu">
                            <li><?php //echo anchor('event/create/','Add Event');?></li>
                            <li><?php //echo anchor('event','Manage Event');?></li>
                         </ul>
                        <!-- END Submenu -->
                   <!-- </li>

                    <li>
                        <a href="<?php echo base_url().'index.php/payment'?>" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span>Payment</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                    </li>

                    <li>
                        <a href="<?php echo base_url().'index.php/invoice'?>" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span>Invoice</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>
                    </li>

                     <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-file"></i>
                            <span>Settings</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                      <!--  <ul class="submenu">
                        	 <li><?php echo anchor('setting/edit/','General');?></li>
                            <li><?php echo anchor('auth/edit_user/','Account Setting');?></li>
                            <li><?php echo anchor('setting/users/','Users Accounts');?></li>
                            <li><?php echo anchor('billing','Billing');?></li>
                            <li><?php echo anchor('billing/booking/','Bookings');?></li>
                        </ul>
                        <!-- END Submenu -->
                  <!--  </li>
                </ul>-->
                <!-- END Navlist -->
				<div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <small>Statistics Overview</small></h1>
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
        </div>
                <!-- BEGIN Sidebar Collapse Button -->
                
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <!--<div class="page-title">
                    <div>
                        <h1><i class="icon-file-alt"></i> Dashboard</h1>
                        <h4>Overview, stats, chat and more</h4>
                    </div>
                </div>-->
                <!-- END Page Title -->

              <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Average Income 2013</h3>
              </div>
              <div class="panel-body">
                <div id="morris-chart-area">
				<select name="report" value="Select">
							<option value="Weekly">Weekly</option>
							<option value="Monthly">Monthly</option>
							</select>
							<div id="container" style="width:100%; height:400px;"></div>
							
				</div>
              </div>
            </div>
          </div>
        </div>

                <!-- BEGIN Main Content -->
                

                <!--<div class="row-fluid">
                    <!--<div class="span7">
                        <div class="box box-black">
                            <div class="box-title">
                                <h3><i class="icon-retweet"></i> Thing To Do</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="things-to-do">
                                    <li>
                                        <p>
                                            <i class="icon-user"></i>
                                            <span class="value">4</span>
                                            Accept User Registration
                                            <a class="btn btn-success" href="#">Go</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-comments"></i>
                                            <span class="value">14</span>
                                            Review Comments
                                            <a class="btn btn-success" href="#">Go</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-shopping-cart blue"></i>
                                            <span class="value">7</span>
                                            Pending Orders
                                            <a class="btn btn-success" href="#">Go</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-file-text-alt"></i>
                                            <span class="value">4</span>
                                            New Invoice
                                            <a class="btn btn-success" href="#">Go</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-gear"></i>
                                            <span class="value">3</span>
                                            Settings To Change
                                            <a class="btn btn-success" href="#">Go</a>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                    <!--<div class="span5">
                        <div class="box box-orange">
                            <div class="box-title">
                                <h3><i class="icon-bar-chart"></i> Weekly Changes</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="weekly-changes">
                                    <li>
                                        <p>
                                            <i class="icon-arrow-up light-green"></i>
                                            <span class="light-green">186</span>
                                            New Comments
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-minus light-blue"></i>
                                            <span class="light-blue">53</span>
                                            New Users
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-arrow-down light-red"></i>
                                            <span class="light-red">17</span>
                                            New Articles
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-arrow-up light-green"></i>
                                            <span class="light-green">75</span>
                                            New Tickets
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            <i class="icon-arrow-down light-red"></i>
                                            <span class="light-red">74</span>
                                            New Orders
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>-->
                <!--</div>-->

                <!--<div class="row-fluid">
                    <div class="span7">
                        <div class="box box-magenta">
                            <div class="box-title">
                                <h3><i class="icon-comment"></i> Last Comments</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="messages nice-scroll" style="height: 300px">
                                    <li>
                                        <img src="img/demo/avatar/avatar2.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>David</h5>
                                                <span class="time"><i class="icon-time"></i> 26 minutes ago</span>
                                            </div>
                                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure ...</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Sarah</h5>
                                                <span class="time"><i class="icon-time"></i> 1 days ago</span>
                                            </div>
                                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa.</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar4.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Emma</h5>
                                                <span class="time"><i class="icon-time"></i> 4 days ago</span>
                                            </div>
                                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar5.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>John</h5>
                                                <span class="time"><i class="icon-time"></i> 2 weeks ago</span>
                                            </div>
                                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem...</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar1.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Penny <span class="label label-info">Admin</span></h5>
                                                <span class="time"><i class="icon-time"></i> 14 July</span>
                                            </div>
                                            <p>Lorem ipsum commodo quis dolor voluptate et in Excepteur. Lorem ipsum amet dolor qui cupidatat in anim reprehenderit quis id culpa consequat non culpa. Lorem ipsum in culpa aliquip incididunt cupidatat dolore irure cupidatat aute cupidatat quis nulla.</p>
                                            <div class="messages-actions">
                                                <a class="show-tooltip" href="#" title="Approve"><i class="icon-ok green"></i></a>
                                                <a class="show-tooltip" href="#" title="Disapprove"><i class="icon-remove orange"></i></a>
                                                <a class="show-tooltip" href="#" title="Remove"><i class="icon-trash red"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="span5">
                        <div class="box box-red">
                            <div class="box-title">
                                <h3><i class="icon-tasks"></i> Tasks In Progress</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="tasks-in-progress">
                                    <li>
                                        <p>
                                            Backend Development
                                            <span>45%</span>
                                        </p>
                                        <div class="progress progress-mini progress-warning">
                                            <div class="bar" style="width:45%"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>
                                            Some Optimization On Javascript Code
                                            <span>63%</span>
                                        </p>
                                        <div class="progress progress-mini">
                                            <div class="bar" style="width:63%"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>
                                            Writing Documentation
                                            <span>30%</span>
                                        </p>
                                        <div class="progress progress-mini progress-danger">
                                            <div class="bar" style="width:30%"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>
                                            Android App Development
                                            <span>80%</span>
                                        </p>
                                        <div class="progress progress-mini progress-success">
                                            <div class="bar" style="width:80%"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>
                                            Marketing
                                            <span>35%</span>
                                        </p>
                                        <div class="progress progress-mini progress-striped">
                                            <div class="bar" style="width:35%"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>
                                            iOS App Developement
                                            <span>55%</span>
                                        </p>
                                        <div class="progress progress-mini progress-warning progress-striped">
                                            <div class="bar" style="width:55%"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->

                <!--<div class="row-fluid">
                    <div class="span7">
                        <div class="box box-pink">
                            <div class="box-title">
                                <h3><i class="icon-comments"></i> Chat</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="messages messages-chat messages-stripped messages-zigzag nice-scroll" style="height:250px">
                                    <li>
                                        <img src="img/demo/avatar/avatar1.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Penny</h5>
                                                <span class="time"><i class="icon-time"></i> 2 minutes ago</span>
                                            </div>
                                            <p>hey Sarah</p>
                                            <p>how R U?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Sarah</h5>
                                                <span class="time"><i class="icon-time"></i> 1 minutes ago</span>
                                            </div>
                                            <p>Hi Penny</p>
                                            <p>Thanks, how are you ?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar1.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Penny</h5>
                                                <span class="time"><i class="icon-time"></i> 47 seconds ago</span>
                                            </div>
                                            <p>ey, I'm good</p>
                                            <p>what's up?</p>
                                            <p>what's your plan for dinner?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="img/demo/avatar/avatar3.jpg" alt="">
                                        <div>
                                            <div>
                                                <h5>Sarah</h5>
                                                <span class="time"><i class="icon-time"></i> 12 seconds ago</span>
                                            </div>
                                            <p>Not much</p>
                                            <p>I haven't any plan, why ?</p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="messages-input-form">
                                    <form method="POST" action="#">
                                        <div class="input">
                                            <input type="text" name="text" placeholder="Write here..." class="input-block-level">
                                        </div>
                                        <div class="buttons">
                                            <a class="show-tooltip" href="#" title="Take Picture"><i class="icon-camera"></i></a>
                                            <a class="show-tooltip" href="#" title="Attach File"><i class="icon-paper-clip"></i></a>
                                            <button type="submit" class="btn btn-primary"><i class="icon-share-alt"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span5">
                        <div class="box box-green">
                            <div class="box-title">
                                <h3><i class="icon-check"></i> Todo List</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">
                                <ul class="todo-list">
                                    <li>
                                        <div class="todo-desc">
                                            <p><a href="#">Fix some bugs</a></p>
                                        </div>
                                        <div class="todo-actions">
                                            <span class="label label-important">Today</span>
                                            <a class="show-tooltip" href="#" title="It's done"><i class="icon-ok"></i></a>
                                            <a class="show-tooltip" href="#" title="Remove"><i class="icon-remove"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="todo-desc">
                                            <p>Add new product's description post</p>
                                        </div>
                                        <div class="todo-actions">
                                            <span class="label label-important">Today</span>
                                            <a class="show-tooltip" href="#" title="It's done"><i class="icon-ok"></i></a>
                                            <a class="show-tooltip" href="#" title="Remove"><i class="icon-remove"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="todo-desc">
                                            <p><a href="#">Remove some posts</a></p>
                                        </div>
                                        <div class="todo-actions">
                                            <span class="label label-warning">Tommorow</span>
                                            <a class="show-tooltip" href="#" title="It's done"><i class="icon-ok"></i></a>
                                            <a class="show-tooltip" href="#" title="Remove"><i class="icon-remove"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="todo-desc">
                                            <p>Shedule backups</p>
                                        </div>
                                        <div class="todo-actions">
                                            <span class="label label-success">This week</span>
                                            <a class="show-tooltip" href="#" title="It's done"><i class="icon-ok"></i></a>
                                            <a class="show-tooltip" href="#" title="Remove"><i class="icon-remove"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="todo-desc">
                                            <p>Weekly sell report</p>
                                        </div>
                                        <div class="todo-actions">
                                            <span class="label label-success">This week</span>
                                            <a class="show-tooltip" href="#" title="It's done"><i class="icon-ok"></i></a>
                                            <a class="show-tooltip" href="#" title="Remove"><i class="icon-remove"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="todo-desc">
                                            <p><a href="#">Hire developers</a></p>
                                        </div>
                                        <div class="todo-actions">
                                            <span class="label label-info">Next week</span>
                                            <a class="show-tooltip" href="#" title="It's done"><i class="icon-ok"></i></a>
                                            <a class="show-tooltip" href="#" title="Remove"><i class="icon-remove"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="todo-desc">
                                            <p><a href="#">New frontend design</a></p>
                                        </div>
                                        <div class="todo-actions">
                                            <span class="label label-info">Next week</span>
                                            <a class="show-tooltip" href="#" title="It's done"><i class="icon-ok"></i></a>
                                            <a class="show-tooltip" href="#" title="Remove"><i class="icon-remove"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- END Main Content -->
                
               <!-- <footer>
                    <p>2013 © Membership .</p>
                </footer>

                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>-->
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->


        

    </body>
</html>
