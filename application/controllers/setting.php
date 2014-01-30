<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Setting extends CI_Controller {
	
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->helper(array('form', 'url'));	
			if($this->input->post('submit')){
				$this->load->model('setting_model');
				$this->setting_model->info_update();
				redirect('setting');
				
			}
			else{$this->load->view('company_setting');}
		
	}
	
	 function edit($id)
	{
   		$this->load->model('setting_model');
		$this->load->helper(array('form', 'url'));	
		$this->load->library('form_validation');
        
		$this->form_validation->set_rules('business_name', 'Business Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required');
		$this->form_validation->set_rules('street1');
		$this->form_validation->set_rules('street2');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('zip', 'Zip', 'required');
		$this->form_validation->set_rules('currency');
		
    //here the code to populate the fields with actual data
     		 if($this->input->post('submit') && $this->form_validation->run() == TRUE)
	 			 {
					$this->setting_model->edit($data);		
				 }
				
  		//get details from database
  		$data['single'] =  $this->setting_model->get();
		//print_r($data);
		$this->load->view('company_setting', $data); 
		
		
		if((int)$id > 0){
			$query = $this->setting_model->get($id);
			
			$data['fid']['value'] = $query['id'];
			$data['fbusiness_name']['value'] = $query['business_name'];
			$data['femail']['value'] = $query['email'];
			$data['fphone']['value'] = $query['phone'];
			$data['fstreet1']['value'] = $query['street1'];
			$data['fstreet2']['value'] = $query['street2'];
			$data['fcity']['value'] = $query['city'];
			$data['fstate']['value'] = $query['state'];
			$data['fzip']['value'] = $query['zip'];
			$data['fcurrency']['value'] = $query['currency'];
			$data['fphoto']['value'] = $query['photo'];
			
					}
		
			
		}  
	
	
}
?>