<? $this->load->view('includes/dash_header'); ?>
<?php $this->load->helper('html');
$this->load->helper('dropdown'); ?>

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

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-desktop"></i>
                            <span>Events</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><?php echo anchor('event/create/','Add Event');?></li>
                            <li><?php echo anchor('event','Manage Event');?></li>
                       </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="<?php echo base_url().'index.php/event/calendar'?>">
                            <i class="icon-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>

                    <li>
                        <a href="gallery.html">
                            <i class="icon-picture"></i>
                            <span>Gallery</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-file"></i>
                            <span>Settings</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                        	 <li><?php echo anchor('setting/edit/','General');?></li>
                            <li class="active"><?php echo anchor('auth/edit_user/','Account Setting');?></li>
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
                        <h1><i class="icon-file-alt"></i>Account Information</h1>
                        <h4>My Account</h4>
                    </div>
                </div>
                <!-- END Page Title -->

                <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.html">Home</a>
                            <span class="divider"><i class="icon-angle-right"></i></span>
                        </li>
                        <li class="active">My Acoount</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->

                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box box-gray">
                            <div class="box-title">
                                <h3><i class="icon-reorder"></i>My Account</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
                            <div class="box-content">	
							<?php echo form_open("auth/edit_user/".$this->uri->segment(3),array('class'=>'form-horizontal'));?>
							<?php echo form_hidden('id', $user->id);?>
      						<?php echo form_hidden($csrf); ?>
                            <div class="form-wizard" id="form-wizard-2">
                                      <ul class="row-fluid steps steps-fill">
                                         <li class="span3">
                                            <a href="#tab2-1" data-toggle="tab" class="step active">
                                                <span class="number">1</span>
                                                <span class="desc"><i class="icon-ok"></i> Account Setup</span>   
                                            </a>
                                         </li>
                                         <li class="span3">
                                            <a href="#tab2-2" data-toggle="tab" class="step">
                                                <span class="number">2</span>
                                                <span class="desc"><i class="icon-ok"></i> Profile Setup</span>   
                                            </a>
                                         </li>
                                         <li class="span3">
                                            <a href="#tab2-3" data-toggle="tab" class="step">
                                                <span class="number">3</span>
                                                <span class="desc"><i class="icon-ok"></i>Localiztion</span>   
                                            </a>
                                         </li>
                                         <li class="span3">
                                            <a href="#tab2-4" data-toggle="tab" class="step">
                                                <span class="number">4</span>
                                                <span class="desc"><i class="icon-ok"></i> Confirm</span>   
                                            </a> 
                                         </li>
                                      </ul>
                                      <div class="progress progress-primary progress-striped">
                                         <div class="bar"></div>
                                      </div>
                                      <div class="tab-content">
                                         <div class="tab-pane active" id="tab2-1">
                                            <div class="control-group">
           									<label class="control-label"><?php echo lang('edit_user_fname_label', 'first_name');?></label>
                                             <div class="controls">
                                            	<?php echo form_input($first_name);?>
      										 </div>
                                           </div>
											<div class="control-group">
                                                <label class="control-label"> <?php echo lang('edit_user_lname_label', 'last_name');?> </label>
      											<div class="controls">
													<?php echo form_input($last_name);?>
                                                 </div>
                                            </div>
           									<div class="control-group">
                                                <label class="control-label"> <?php echo lang('edit_user_company_label', 'company');?> </label>
            									<div class="controls">
     												<?php echo form_input($company);?>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label"> <?php echo lang('edit_user_phone_label', 'phone');?> </label>
                                                <div class="controls">
                                                	 <?php echo form_input($phone);?>
                                                </div>
                                             </div>
                                           </div>
                                           <div class="tab-pane" id="tab2-2">
                                            <div class="control-group">
                                                <label for="username2" class="control-label">Username</label>
                                                <div class="controls">
                                                    <?php echo form_input($username);?>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="password2" class="control-label"><?php echo lang('edit_user_password_label', 'phone');?></label>
                                                <div class="controls">
                                                   <?php echo form_password('password');?>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="re-password2" class="control-label">Password Again</label>
                                                <div class="controls">
                                                   <?php echo form_password('password_confirm');?>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="email2" class="control-label"><?php echo lang('edit_user_email_label', 'email');?></label>
                                                <div class="controls">
                                                 	 <?php echo form_input($email);?>     
                                                </div>
                                            </div>
                                         </div>
                                         <div class="tab-pane" id="tab2-3">
                                            <div class="control-group">
                                                <label for="country2" class="control-label">Default Country</label>
                                                <div class="controls">
                                                    <?php echo form_countries('country') ?>
                                                    <!--<input type="text" name="country2" id="country2" class="input-xlarge">-->
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label for="city2" class="control-label">Language</label>
                                                <div class="controls">
                                                	<?php $options = array(
															  'English'  => 'English',
															  'Spanish'    => 'Spanish',
															  'French'   => 'French',
															  'Dutch' => 'Dutch',); ?>
                
                                                    <?php echo form_dropdown('language',$options); ?>
                                                </div>
                                            </div>
                                         </div>
                                         <div class="tab-pane" id="tab2-4">
                                            <div class="control-group">
                                                <label class="control-label"><?php echo lang('edit_user_fname_label', 'first_name');?></label>
                                                <div class="controls">
                                                    <span class="text"><?php echo $user->first_name;?></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label"><?php echo lang('edit_user_lname_label', 'last_name');?></label>
                                                <div class="controls">
                                                    <span class="text"><?php echo $user->last_name;?></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Username</label>
                                                <div class="controls">
                                                    <span class="text"><?php echo $user->username;?></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label"><?php echo lang('edit_user_email_label', 'email');?></label>
                                                <div class="controls">
                                                    <span class="text"><?php echo $user->email;?></span>
                                                </div>
                                            </div>
                                           <div class="control-group">
                                                <label class="control-label">Default Country</label>
                                                <div class="controls">
                                                    <span class="text"><?php echo $user->country;?></span>
                                                </div>
                                            </div>
                                             <div class="control-group">
                                                <label class="control-label">Language</label>
                                                <div class="controls">
                                                    <span class="text"><?php echo $user->language;?></span>
                                                </div>
                                            </div>
                                         </div>
                                         </div>
                                         <div class="form-actions clearfix">
                                         <a href="javascript:;" class="btn button-previous">
                                            Back 
                                         </a>
                                         <a href="javascript:;" class="btn btn-primary button-next">
                                            Continue
                                         </a>
                                         <?php echo form_submit('submit','Submit','class="btn btn-success button-submit"');?>
                                         <!--<a href="javascript:;" class="btn btn-success button-submit">
                                            Submit
                                         </a>-->
                                      </div>
                                   </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Main Content -->
                
               <!-- <footer>
                    <p>2013 © FLATY Admin Template.</p>
                </footer>
-->
                <a id="btn-scrollup" class="btn btn-circle btn-large" href="#"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- END Content -->
        </div>
        <!-- END Container -->

<?php echo form_close();?>
