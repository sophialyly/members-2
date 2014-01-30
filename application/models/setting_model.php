<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Setting_model extends CI_Model {
 public function __construct()
 {
  parent::__construct();
 }
 /*function site()
 {
	
   $this->load->database();
	$data=array(
    'site_title'=>$this->input->post('site_title'),
    'site_address'=>$this->input->post('site_address'),
    'site_email'=>$this->input->post('site_email'),
	 'date_format'=>$this->input->post('date_format'),
    'css_style'=>$this->input->post('css_style'),
  );
  $this->db->insert('site',$data);
 }*/
 
 /*function create()
 {
	$this->load->database();
	$data=array(
    'first_name'=>$this->input->post('first_name'),
    'last_name'=>$this->input->post('last_name'),
    'username'=>$this->input->post('username'),
	 'password'=>$this->input->post('password'),
    'email'=>$this->input->post('email'),
	 'status'=>$this->input->post('status'),
  );
  $this->db->insert('clients',$data);
 }
 */
 
 	function get_info($id){
		$this->load->database();
		$this->db->where('id',$id);
		$query = $this->db->get('tb_companyinfo');
		return $query->row_array();
	}
  
	function info_update()
	{
		$this->load->database();
		$random_no=rand(1,999);
   		$this->load->database();
		$file=$random_no.trim($_FILES['photo']['tmp_name']);
		$image_upload=$random_no.trim($_FILES['photo']['name']);
		//$image= addslashes(file_get_contents($_FILES['image_path']['tmp_name']));
		$image_name= addslashes($_FILES['photo']['name']);
		move_uploaded_file($_FILES["photo"]["tmp_name"],"assets/images/" .$image_upload);
			
		 $data = array(
					  'bussiness_name' => $this->input->post('bussiness_name'),
					  'email' => $this->input->post('email'),
					  'phone' => $this->input->post('phone'),
					  'street1' => $this->input->post('street1'),
					  'street2' => $this->input->post('street1'),
					  'city' => $this->input->post('city'), 
					  'state' => $this->input->post('state'),   
					  'zip' => $this->input->post('zip'), 
					  'currency' => $this->input->post('currency'),
					  'photo' => $image_upload,
					);
			 
					//print_r($data);
			$this->db->where('ID',$this->input->post('id'));
			$this->db->update('tb_companyinfo',$data);  
		 }
		
	function general()
	{
				
				$data['fid']['value']       = 0;
				//$data['fcity']['value']       = '';
						
				$data['bussiness_name']	 = 'Bussiness Name';
				$data['email']	 	= 'Email';
				$data['phone']	= 'phone';				
				$data['street1']	= 'street1';
				$data['street2']	= 'street2';
				$data['city']	 	= 'city';
				$data['state']	 	= 'state';
				$data['zip']	 	= 'zip';
				$data['currency']	= 'currency';
				$data['photo']	 	= 'photo';
				
				//$data['forminput']  = 'Form Input';
				$data['fbussiness_name']	= array('name'=>'bussiness_name','size'=>30);
				$data['femail']	= array('name'=>'email','size'=>30);
				$data['fphone']	= array('name'=>'phone','size'=>30);
				$data['fstreet1'] = array('name'=>'street1','size'=>30);
				$data['fstreet2'] = array('name'=>'street2');
				$data['fcity']	= array('name'=>'city','size'=>30);
				$data['fstate'] = array('name'=>'state','size'=>30);
				$data['fzip'] = array('name'=>'zip','size'=>30);
				$data['fcurrency'] = array('name'=>'currency','size'=>30);
				$data['fphoto'] = array('name'=>'photo','size'=>30);
					
				
				return $data;
	}
		 
 
 
 
 
  
 
	function get()
	{
		$this->load->database();
		//$query = $this->db->query('select * from tb_companyinfo where id=1 ');
    	//return $query->result();
		$query = $this->db->select('*')->from('tb_companyinfo')->get();
		return $query->result();
		//print_r($query);
	}

	function edit($data)
	{
		$this->load->database();
			 
		$data = array(
					  'business_name' => $this->input->post('business_name'),
					  'email' => $this->input->post('email'),
					  'phone' => $this->input->post('phone'),
					  'street1' => $this->input->post('street1'),
					  'street2' => $this->input->post('street1'),
					  'city' => $this->input->post('city'), 
					  'state' => $this->input->post('state'),   
					  'zip' => $this->input->post('zip'), 
					  'currency' => $this->input->post('currency'),
					  'photo' => $this->input->post('photo'),
					);
					
		$this->db->where('id','1');
		$this->db->update('tb_companyinfo',$data);    
	}  
}
?>