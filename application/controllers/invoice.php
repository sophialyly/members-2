<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Invoice extends CI_Controller {
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
		$this->load->model('invoice_model');
		
		//$persons = $this->event_model->fetch_event($this->limit, $offset);
		
 		$config = array();
		$data ['query'] = $this->invoice_model->invoice_view();
		$tmpl = array ( 'table_open'  => '<table id="big_table" class="table table-bordered table-hover tablesorter"> ' );
         //$this->table->set_template($tmpl); 
        
         $this->table->set_heading('');	
         $this->load->view('invoice_view');
		//$this->Register();
		
		
	}
	function single_view($id)
	{
		$this->load->model('invoice_model');
		//$this->load->model('setting_model');
		//$data['single'] =  $this->setting_model->get();
        $data['result'] = $this->invoice_model->single_view($id)->row();
		$data['payment'] = $this->invoice_model->get_payment($id);
		$data['invoice'] = $this->invoice_model->get_invoice($id);
		$this->load->view('single_invoice', $data);
	}
		//create a New Event
	function add_invoice()
	{
		$this->load->helper(array('form', 'url'));	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('invoiceID', 'Invoice ID', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('date_issued', 'Start Date', 'required');
		$this->form_validation->set_rules('membership_type', 'Membership_type', 'required');
		$this->form_validation->set_rules('end_date', 'Expired On', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required|callback_select_validate');
		$this->form_validation->set_message('select_validate', 'Please Select Option');
			
			if($this->input->post('submit') && $this->form_validation->run() == TRUE){
				$this->load->model('invoice_model');
				$this->invoice_model->add_invoice();
				redirect('invoice');//echo "success";
			}
			else{
				//$this->load->view('add_invoice',$data);
				$this->get_membership_type_name();
		}
		
		
	}
	function select_validate($status) {
                    return $status == '0' ? FALSE : TRUE;
                 }
	function edit($id=0)
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('invoiceID', 'Invoice ID', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('date_issued', 'Start Date', 'required');
		$this->form_validation->set_rules('membership_type', 'Membership_type', 'required');
		$this->form_validation->set_rules('end_date', 'Expired On', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
				
		$this->load->model('invoice_model');
		if($this->input->post('submit')&& $this->form_validation->run() == TRUE){
			if($this->input->post('id')){
				$this->invoice_model->invoice_update();
				redirect('invoice');
			
			}else{ 
					echo "error";
				}
	}
	
	
		$data = $this->invoice_model->general();
		$this->load->helper('form', 'url');
		 
				
   		if((int)$id > 0){
			$query = $this->invoice_model->get($id);
			
			$data['fid']['value'] = $query['id'];
			$data['finvoiceID']['value'] = $query['invoiceID'];
			$data['ffirst_name']['value'] = $query['first_name'];
			$data['flast_name']['value'] = $query['last_name'];
			$data['fdate_issued']['value'] = $query['date_issued'];
			$data['fmembership_type']['value'] = $query['membership_type'];
			$data['fend_date']['value'] = $query['end_date'];
			$data['famount']['value'] = $query['amount'];
			$data['fstatus']['value'] = $query['status'];
			
					}
		$data['membership_types'] = $this->invoice_model->get_membership_type();
		$this->load->view('invoice_update',$data);
		
			

	}

	function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->db->where("id", $id);
		$this->db->delete("tb_invoice");
		redirect('invoice');
	}
	function btn_cancel()
	{
		if($this->input->post('cancel')){
		redirect('invoice');
		}
	}
	function get_membership_type_name()
	{
	 	$this->load->model('invoice_model');
		$data['membership_type'] = $this->invoice_model->get_membership_type();
		//print_r($data);
		$this->load->view('add_invoice', $data);
	}
	function add_invoice_payment($id)
	{
	 	$this->load->model('invoice_model');
		$data['result'] = $this->invoice_model->add_invoice_payment($id)->row();
		
		$this->load->view('invoice_add_payment', $data);
		
		
	}
	function datatable()
    {
		 $query = $this->datatables->select('id as id,invoiceID,CONCAT(first_name," ",last_name) as first_name, amount,date_issued,status',FALSE)
		 ->from('tb_invoice')
		// ->join('tb_membership',' tb_invoice.membership_type = tb_membership.id')
		// ->add_column('edit', '<a href="'.base_url().'index.php/invoice/edit/$1">Edit</a>', 'id')
		// ->add_column('delete', '<a href="'.base_url().'index.php/invoice/delete/$1">Delete</a>', 'id')
		 // ->add_column('add_payment', '<a href="'.base_url().'index.php/invoice/add_invoice_payment/$1">Add Payment</a>', 'id')
		 ->add_column('Actions', get_link_invoice('$1'),'id')
        //$data = $this->datatables->select('id,first_name,last_name,membership_type')
        ->unset_column('id');
       // ->from('tb_payment');
      
        echo $this->datatables->generate();
		//echo json_encode($query);
		
    }
}
?>
