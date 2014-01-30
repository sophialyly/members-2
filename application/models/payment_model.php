<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Payment_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	function add_payment()
	{
		$random_no=rand(1,999);
		$this->load->database();
		
		$data=array(
    	'first_name'=>$this->input->post('first_name'),
    	'last_name'=>$this->input->post('last_name'),
    	'membership_type'=>$this->input->post('membership_type'),
		'amount'=>$this->input->post('amount'),
		'invoice'=>$this->input->post('invoice'),
		'payment_date'=>$this->input->post('payment_date'),
		'payment_method'=>$this->input->post('payment_method'),
		'status'=>$this->input->post('status')
		
		);
  
  		$this->db->insert('tb_payment',$data);
		//$id = $this->db->insert_id();
 	}

	function payment_view()
	{
    	//$query = $this->db->select('*')->from('tb_payment')->get();
			$query = $this->db->query('select tb_payment.*,tb_membership.membership_type from tb_payment, tb_membership where tb_payment.membership_type = tb_membership.id ORDER BY `tb_payment`.`id` ASC');
    	return $query->result();
	}
	function single_view($id)
	{		
		$this->load->database();
		$this->db->where('id', $id);
		return $this->db->get('tb_payment');
	}
	
	function get($id)
	{
		$this->load->database();
		$this->db->where('id',$id);
		$query = $this->db->get('tb_payment');
		return $query->row_array();
	}

	function payment_update()
 	{
  		$this->load->database();
    
		$data=array(
   		'first_name'=>$this->input->post('first_name'),
    	'last_name'=>$this->input->post('last_name'),
    	'membership_type'=>$this->input->post('membership_type'),
		'amount'=>$this->input->post('amount'),
		'invoice'=>$this->input->post('invoice'),
    	'payment_date'=>$this->input->post('payment_date'),
    	'payment_method'=>$this->input->post('payment_method'),
		'payment_status'=>$this->input->post('payment_status'),
		
  		);
	 
			//print_r($data);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('tb_payment',$data);  
 	}

	function general()
	{
		$data['first_name'] = 'First Name';
		$data['last_name'] = 'Last Name';
		$data['membership_type'] = 'Membership';
		$data['amount'] = 'Amount';
		$data['invoice']	= 'Invoice';
		$data['payment_date'] = 'Date';
		$data['payment_method'] = 'Payment Method';
		$data['payment_status'] = 'Payment Status';
		
		
		//$data['forminput']  = 'Form Input';
		$data['ffirst_name'] = array('name'=>'first_name','size'=>30);
		$data['flast_name']	= array('name'=>'last_name','size'=>30);
		$data['fmembership_type']	= array('name'=>'membership_type','size'=>30);
		$data['famount'] = array('name'=>'amount','size'=>30);
		$data['finvoice']	= array('name'=>'invoice','size'=>30);
		$data['fpayment_date'] = array('name'=>'payment_date','size'=>30);
		$data['fpayment_method'] = array('name'=>'payment_method','size'=>30);
		$data['fpayment_status'] = array('name'=>'payment_status','size'=>30);
		return $data;
	}
	
	function get_payment($id)
 	{
	 	
		$this->load->database();
	 	$query = $this->db->query('SELECT * FROM tb_payment JOIN tb_members ON tb_members.id = tb_payment.member_id WHERE tb_members.id="'.$id.'"');
		return $query->result();
		
	}
	
	function get_invoice($id)
 	{
	 	
		$this->load->database();
	 	$query = $this->db->query('SELECT * FROM tb_invoice JOIN tb_members ON tb_members.id = tb_invoice.member_id WHERE tb_members.id="'.$id.'"');
		return $query->result();
		
	}
	
	function get_membership_type()
	{
		$this->load->database();
		//$this->db->select('id,membership_type');
		$this->db->from('tb_membership');
		//$query=$this->db->query('SELECT id,membership_type FROM tb_membership ') or die('error');
		$this->db->order_by('membership_type');
		$result = $this->db->get();
		$return = array();
		if($result->num_rows() > 0) {
		foreach($result->result_array() as $row) {
			$return[$row['id']] = $row['membership_type'];
			}	
		}
		 
		return $return;
		
	}
	
 }
?>