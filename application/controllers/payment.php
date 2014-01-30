<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Payment extends CI_Controller {
	private $limit = 2;
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->database();
		$this->lang->load('auth');
		$this->load->helper('language');
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
		$this->load->model('payment_model');
		
		//$persons = $this->event_model->fetch_event($this->limit, $offset);
		
 		$config = array();
		//$this -> load -> library('pagination');
        //$config["base_url"] = base_url() . "index.php/event/index/";
        //$config["total_rows"] = $this->event_model->record_count();
        //$config["per_page"] = $this->limit;
	 	//$config["uri_segment"] = $uri_segment;
		
        //$this->pagination->initialize($config);

        //$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //$data["results"] = $this->event_model->fetch_event($config["per_page"], $page);
        //$data["links"] = $this->pagination->create_links();
		//$this->load->model('setting_model');
		//$data['single'] =  $this->setting_model->get();
       	 //$data ['query'] = $this->payment_model->payment_view();
		 $tmpl = array ( 'table_open'  => '<table id="big_table" class="table table-bordered table-hover tablesorter"> ' );
         //$this->table->set_template($tmpl); 
        
         $this->table->set_heading('');
         $this->load->view('payment_view');
		//$this->Register();
		
		
	}
	/*function single_view($id)
	{
		$this->load->model('member_model');
		//$this->load->model('setting_model');
		//$data['single'] =  $this->setting_model->get();
        $data['result'] = $this->member_model->single_view($id)->row();
		$data['payment'] = $this->member_model->get_payment($id);
		$data['invoice'] = $this->member_model->get_invoice($id);
		$this->load->view('single_member', $data);
	}*/
		//create a New Event
	function add_payment()
	{
		$this->load->helper(array('form', 'url'));	
		//$this->load->library('form_validation');
			
			if($this->input->post('submit')){
				$this->load->model('member_model');
				$this->member_model->add_member();
				redirect('payment');//echo "success";
			}
			else{
				//$this->load->model('setting_model');
				//$data['single'] =  $this->setting_model->get();
				//$this->load->view('add_payment',$data);}
				$this->get_membership_type_name();
		}
		
	}
	
	function edit($id=0)
	{
		$this->load->helper(array('form', 'url'));		
		$this->load->model('payment_model');
		
			$this->load->library('form_validation');
		
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('invoice', 'Invoice', 'required');
		$this->form_validation->set_rules('payment_date', 'Date', 'required');
		//$this->form_validation->set_rules('status', 'Status', 'required|callback_select_validate');
		
		//$this->form_validation->set_message('select_validate', 'Please Select Option');
		
		
		
		if($this->input->post('submit') && $this->form_validation->run() == TRUE){
			if($this->input->post('id')){
				$this->payment_model->payment_update();
				redirect('payment');
			
			}else{ 
					echo "error";
				}
	}
		$data = $this->payment_model->general();
		$this->load->helper('form', 'url');
		 
				
   		if((int)$id > 0){
			$query = $this->payment_model->get($id);
			
			$data['fid']['value'] = $query['id'];
			$data['ffirst_name']['value'] = $query['first_name'];
			$data['flast_name']['value'] = $query['last_name'];
			$data['fmembership_type']['value'] = $query['membership_type'];
			$data['famount']['value'] = $query['amount'];
			$data['finvoice']['value'] = $query['invoice'];
			$data['fpayment_date']['value'] = $query['payment_date'];
			$data['fpayment_method']['value'] = $query['payment_method'];
			$data['fpayment_status']['value'] = $query['payment_status'];
					
					}
			$data['membership_types'] = $this->payment_model->get_membership_type();
			$this->load->view('payment_update',$data);
		
			

	}

	function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->db->where("id", $id);
		$this->db->delete("tb_payment");
		redirect('payment');
	}
	function get_membership_type_name()
	{
	 	$this->load->model('payment_model');
		$data['membership_type'] = $this->payment_model->get_membership_type();
		//print_r($data);
		$this->load->view('add_payment', $data);
	}
	
	function datatable()
    {
		 $query = $this->datatables->select('tb_payment.id as id,tb_payment.first_name as fn,tb_payment.last_name as ln,tb_membership.membership_type as mt,tb_payment.amount as am,tb_payment.invoice as iv,tb_payment.payment_date as dt,tb_payment.payment_method as py')
		 ->from('tb_payment')
		 ->join('tb_membership',' tb_payment.membership_type = tb_membership.id')
		 //->add_column('edit', '<a href="'.base_url().'index.php/payment/edit/$1">Edit</a>', 'id')
		// ->add_column('delete', '<a href="'.base_url().'index.php/payment/delete/$1">Delete</a>', 'id')
        //$data = $this->datatables->select('id,first_name,last_name,membership_type')
		 ->add_column('Actions', get_link_payment('$1'),'id')
        ->unset_column('id');
       // ->from('tb_payment');
      
        echo $this->datatables->generate();
		//echo json_encode($query);
		
    }
	
}
?>
