<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Member extends CI_Controller {
	private $limit = 2;
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->database();
		$this->lang->load('auth');
		$this->load->helper('language');
		$this->load->library("pagination");
		$this->load->library('Datatables');
        $this->load->library('table');
		$this->load->helper('datatables_helper');
		//call pagination library
	}
	function index()
	{
		$this->load->helper('url');
		$uri_segment = 4;
		$offset = $this->uri->segment($uri_segment);
		$this->load->model('member_model');
		
		//$persons = $this->event_model->fetch_event($this->limit, $offset);
		
 		$config = array();
		
		$data['user'] =  $this->member_model->get_user_activate();
		$data['result'] =  $this->member_model->get_user_inactivate();
       	$data['query'] = $this->member_model->member_view();
		 //$data['rs'] = $this->member_model->member_get_all();	
		 $tmpl = array ( 'table_open'  => '<table id="big_table" class="table table-bordered table-hover tablesorter"> ' );
         //$this->table->set_template($tmpl); 
        
         $this->table->set_heading('');
         $this->load->view('member_view',$data);
		//$this->Register();
		
		
	}
	function single_view($id)
	{
		$this->load->model('member_model');
		//$this->load->model('setting_model');
		//$data['single'] =  $this->setting_model->get();
        $data['result'] = $this->member_model->single_view($id)->row();
		$data['payment'] = $this->member_model->get_payment($id);
		$data['invoice'] = $this->member_model->get_invoice($id);
		$this->load->view('single_member', $data);
	}
		//create a New Event
	function add_member()
	{
		$this->load->helper(array('form', 'url'));	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('street1');
		$this->form_validation->set_rules('street2');
		$this->form_validation->set_rules('amount');
		$this->form_validation->set_rules('zip', 'Zip', 'required');
		$this->form_validation->set_rules('membership_type', 'Membership Type', 'required');
		$this->form_validation->set_rules('expired_on', 'Expired on', 'required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'required');
		$this->form_validation->set_rules('payment_date', 'Payment Date', 'required');
		$this->form_validation->set_rules('invoice', 'Invoice', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required|callback_select_validate');
		$this->form_validation->set_rules('payment_method', 'Payment Method', 'required|callback_select_validate');
		$this->form_validation->set_rules('payment_status', 'Payment Status', 'required|callback_select_validate');
		$this->form_validation->set_message('select_validate', 'Please Select Option');
			
			if($this->input->post('submit') && $this->form_validation->run() == TRUE){
				$this->load->model('member_model');
				$this->member_model->add_member();
				redirect('member');//echo "success";
			}
			else{
				
				//$this->load->view('add_member',$data);
				$this->get_membership_type_name();
				
				}
		//}
		
	}
	function select_validate($status) {
                    return $status == '0' ? FALSE : TRUE;
                 }
				 
	function edit($id=0)
	{
		$this->load->helper(array('form', 'url'));		
		$this->load->model('member_model');
		
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('street1');
		$this->form_validation->set_rules('street2');
		$this->form_validation->set_rules('zip', 'Zip', 'required');
		$this->form_validation->set_rules('membership_type', 'Membership Type', 'required');
		$this->form_validation->set_rules('expired_on', 'Expired on', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required|callback_select_validate');
		
		$this->form_validation->set_message('select_validate', 'Please Select Option');
		
		
		
		if($this->input->post('submit') && $this->form_validation->run() == TRUE){
			if($this->input->post('id')){
				
				$this->member_model->member_update();
				redirect('member');
			
			}else{ 
					echo "error";
				}
			}
		$data = $this->member_model->general();
		$this->load->helper('form', 'url');
		 
				
   		if((int)$id > 0){
			$query = $this->member_model->get($id);
			
			$data['fid']['value'] = $query['id'];
			$data['ffirst_name']['value'] = $query['first_name'];
			$data['flast_name']['value'] = $query['last_name'];
			$data['femail']['value'] = $query['email'];
			$data['fpassword']['value'] = $query['password'];
			$data['fphone']['value'] = $query['phone'];
			$data['fstreet1']['value'] = $query['street1'];
			$data['fstreet2']['value'] = $query['street2'];
			$data['fcity']['value'] = $query['city'];
			$data['fstate']['value'] = $query['state'];
			$data['fzip']['value'] = $query['zip'];
			$data['fmembership_type']['value'] = $query['membership_type'];
			$data['fexpired_on']['value'] = $query['expired_on'];
			$data['fstatus']['value'] = $query['status'];
			$data['frecuring_payments']['value'] = $query['recuring_payments'];
			$data['fphoto']['value'] = $query['photo'];
			
					}
			//$this->load->model('member_model');
			//$data['single'] =  $this->setting_model->get();
			$data['membership_types'] = $this->member_model->get_membership_type();
			$this->load->view('member_update',$data);
			//$this->get_cities();
		
			

	}

	function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->db->where("id", $id);
		$this->db->delete("tb_members");
		redirect('member');
	}
	function imgupload()
	{
		
		$this->load->model('member_model');
		$this->member_model->img();
		///$this->event_model->do_upload();
		$this->load->view('add_member');
    }
	
		
 
 	function get_membership_type_name()
	{
	 	$this->load->model('member_model');
		$data['membership_type'] = $this->member_model->get_membership_type();
		//print_r($data);
		$this->load->view('add_member', $data);
	}
	
	 public function record_count() {
        return $this->db->count_all("members");
    }
	
	function datatable()
    {
		 $query = $this->datatables->select('tb_members.id as id,tb_members.first_name as fn,tb_members.last_name as ln,tb_members.email as mail,tb_members.phone as phn,tb_membership.membership_type as mt,tb_members.status as st')
		 ->from('tb_members')
		 ->join('tb_membership',' tb_members.membership_type = tb_membership.id')
		 //->add_column('edit', '<a href="'.base_url().'index.php/payment/edit/$1">Edit</a>', 'id')
		// ->add_column('delete', '<a href="'.base_url().'index.php/payment/delete/$1">Delete</a>', 'id')
        //$data = $this->datatables->select('id,first_name,last_name,membership_type')
		 ->add_column('Actions', get_link_member('$1'),'id')
        ->unset_column('id');
       // ->from('tb_payment');
      
        echo $this->datatables->generate();
		//echo json_encode($query);
		
    }
	
}
?>
