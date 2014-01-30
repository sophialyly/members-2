<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Membership extends CI_Controller {
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
		$this->load->model('membership_model');
		
 		$config = array();
		$data ['query'] = $this->membership_model->membership_view();
		$tmpl = array ( 'table_open'  => '<table id="big_table" class="table table-bordered table-hover tablesorter"> ' );
         //$this->table->set_template($tmpl); 
        
        $this->table->set_heading('');	
        $this->load->view('membership_view', $data);
		
		
		
	}
	
	function add_membership()
	{
		$this->load->helper(array('form', 'url'));	
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('membership_code', 'Membership Code', 'required');
		$this->form_validation->set_rules('annual_fees', 'Annual Fees', 'required');
		$this->form_validation->set_rules('membership_type', 'Membership Type', 'required|callback_select_validate');
		$this->form_validation->set_rules('duration', 'Duration', 'required|callback_select_validate');
		$this->form_validation->set_rules('recuring_payment', 'Recuring Payment', 'required|callback_select_validate');
		$this->form_validation->set_rules('active', 'Active', 'required|callback_select_validate');
		
		
		$this->form_validation->set_message('select_validate', 'Please Select Option');
			
			if($this->input->post('submit') ){
				$this->load->model('membership_model');
				$this->membership_model->add_membership();
				redirect('membership');
			}
			else{
				$this->load->view('add_membership',$data);
				}
		
	}
				 
	function edit($id=0)
	{
		$this->load->helper(array('form', 'url'));		
		$this->load->model('membership_model');
		
		
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('membership_code', 'Membership Code', 'required');
		$this->form_validation->set_rules('annual_fees', 'Price', 'required');
		$this->form_validation->set_rules('membership_type', 'Membership Type', 'required|callback_select_validate');
		$this->form_validation->set_rules('duration', 'Duration', 'required|callback_select_validate');
		$this->form_validation->set_rules('recuring_payment', 'Recuring Payment', 'required|callback_select_validate');
		$this->form_validation->set_rules('active', 'Active', 'required|callback_select_validate');
		
		
		$this->form_validation->set_message('select_validate', 'Please Select Option');
		
		if($this->input->post('submit') && $this->form_validation->run() == TRUE){
			if($this->input->post('id')){
				$this->membership_model->membership_update();
				redirect('membership');
			
			}else{ 
					echo "error";
				}
	}
		$data = $this->membership_model->general();
		$this->load->helper('form', 'url');
		 
				
   		if((int)$id > 0){
			$query = $this->membership_model->get($id);
			$data['fid']['value'] = $query['id'];
			$data['fmembership_type']['value'] = $query['membership_type'];
			$data['fannual_fees']['value'] = $query['annual_fees'];
			$data['fduration']['value'] = $query['duration'];
			$data['fdays']['value'] = $query['days'];
			$data['frecuring_payment']['value'] = $query['recuring_payment'];
			$data['factive']['value'] = $query['active'];
			
			
					}
		//$this->load->model('setting_model');
		//$data['single'] =  $this->setting_model->get();
		$this->load->view('membership_update',$data);
		//$this->get_cities();
			

	}

	function delete($id)
	{
		$id = $this->uri->segment(3);
		$this->db->where("id", $id);
		$this->db->delete("tb_membership");
		redirect('membership');
	}
	
	function datatable()
    {
		 $query = $this->datatables->select('id as id,membership_type,annual_fees,CONCAT(tb_membership.duration," ",tb_membership.days) AS duration,active',FALSE)
		 ->from('tb_membership')
		 //->join('tb_membership',' tb_payment.membership_type = tb_membership.id')
		 //->add_column('edit', '<a href="'.base_url().'index.php/membership/edit/$1">Edit</a>', 'id')
		 //->add_column('delete', '<a href="'.base_url().'index.php/membership/delete/$1">Delete</a>', 'id')
		 ->add_column('Actions', get_link_membership('$1'),'id')
        ->unset_column('id');
      
        echo $this->datatables->generate();
		//echo json_encode($query);
		
    }
	
}
?>
