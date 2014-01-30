<? $this->load->view('includes/dash_header'); ?>
   
    
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
                            <li class="active"><?php echo anchor('event/create/','Add Event');?></li>
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
                        <h1><i class="icon-file-alt"></i>Events</h1>
                        <h4>Overview,Event Management</h4>
                    </div>
                </div>
                <!-- END Page Title -->
                 <!-- BEGIN Breadcrumb -->
                <div id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li class="active"><i class="icon-home"></i>New Event</li>
                    </ul>
                </div>
                <!-- END Breadcrumb -->
                <!-- BEGIN Main Content -->
                <div class="row-fluid">
                    <div class="span12">
                        <div class="box">
                            <div class="box-title">
                                <h3><i class="icon-reorder"></i>Create Event</h3>
                                <div class="box-tool">
                                    <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
                                    <a data-action="close" href="#"><i class="icon-remove"></i></a>
                                </div>
                            </div>
<?php echo form_open_multipart("event/create",array('class'=>'form-horizontal')); ?>
<div class="control-group">
       	  <label class="control-label"><?php echo lang('create_event_name_label', 'event_name');?></label>
          <div class="controls">
         	<div class="span12">
         		<input type="text" id="username" class="input-xlarge" name="event_name" data-rule-required="true" data-rule-minlength="3" />
           		<?php //echo form_input('event_name',array('class'=>'span6'));?>
      </div></div></div>

     <div class="control-group">
      		<label class="control-label"><?php echo lang('create_event_discription_label', 'description');?></label> 
            <?php //echo form_textarea($desc);?>
            <div class="controls">
            <textarea class="input-xxlarge wysihtml5" name="description" rows="6"></textarea>
     </div></div>

 <div class="control-group">
      		<label class="control-label"><?php echo lang('create_event_date_label', 'date');?></label> 
           <div class="controls">
                <div class="input-append date date-picker" data-date="12-02-2012" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                    <input class="date-picker" size="16" type="text" name="date" value="12-02-2012"/>
                    <span class="add-on"><i class="icon-calendar"></i></span>
                </div></div>
           </div>

 
      <div class="control-group">
      		<label class="control-label"><?php echo lang('create_event_time_label', 'time');?></label> 
           <div class="controls">
                <div class="input-append bootstrap-timepicker-component">
                  <input class="timepicker-default" name="time" type="text" />
           		  <span class="add-on"><i class="icon-time"></i></span>
                </div>
           </div>
 		</div>
 
<div class="control-group">
      		<label class="control-label"><?php echo lang('create_event_address_label', 'address');?></label> 
            <?php //echo form_textarea($desc);?>
            <div class="controls">
            <textarea class="input-xxlarge" name="address" rows="6"></textarea>
     </div></div>
     
     <?php $this->load->helper('state');?>
     <div class="control-group">
        <label for="select" class="control-label"><?php echo lang('create_event_state_label', 'state');?></label>
        <div class="controls">
         	<!--<select class="input-xlarge" name="select" id="select" data-rule-required="true">-->
            <?php echo state_dropdown('state');//echo form_dropdown('state',$state_list,'class = "input-xlarge"','id = "select"','data-rule-required="true"');?>                               
        </div>
      </div>
      		

      <div class="control-group">
        <label for="select" class="control-label"><?php echo lang('create_event_city_label', 'city');?></label> 
        <div class="controls">
            <?php echo state_dropdown('city');//echo form_dropdown('city', $city_list,'class = "input-xlarge"','id = "select"','data-rule-required="true"'); ?>
     </div></div>
      
      <div class="control-group">
          <label for="numberfield" class="control-label"><?php echo lang('create_event_zip_label', 'zip');?> </label>
             <div class="controls">
                <input type="text" class="input-xlarge" name="zip">
             </div>
      </div>
      		
      <div class="control-group">
       	  <label class="control-label"> <?php echo lang('create_event_status_label', 'status');?> </label>
          <div class="controls">
         	<div class="span12">
         		<input type="text" id="username" name="status" class="input-xlarge"/>
           		<?php //echo form_input('event_name',array('class'=>'span6'));?>
      </div></div></div>
      		
           
       <div class="control-group">
           <label class="control-label"><?php echo lang('create_event_image_label', 'image_path');?></label>
           <div class="controls">
            <div class="fileupload fileupload-new" data-provides="fileupload">
              <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
               </div>
                 <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                  <div>
                 <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                  <span class="fileupload-exists">Change</span>
                  <input type="file" name="image_path" class="default" /></span>
                  <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                   </div>
                   </div>
                   <span class="label label-important">NOTE!</span>
                    <span>
                       Attached image thumbnail is
                       supported in Latest Firefox, Chrome, Opera, 
                       Safari and Internet Explorer 10 only
                    </span>
              </div>
         </div>
       		
        <div class="form-actions">
          <?php echo form_submit('submit', lang('create_event_submit_btn'),'class = "btn btn-primary"');?></li>
          <?php echo form_button('cancel','Cancel','class = "btn"');?>
        </div>  

<?php echo form_close();?>
</div></div></div></div>