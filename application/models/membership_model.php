<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Membership_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	function add_membership()
	{
		$this->load->database();
		
		$data=array(
    	'membership_type'=>$this->input->post('membership_type'),
    	'membership_code'=>$this->input->post('membership_code'),
    	'annual_fees'=>$this->input->post('annual_fees'),
		'duration'=>$this->input->post('duration'),
		'days'=>$this->input->post('days'),
		'recuring_payment'=>$this->input->post('recuring_payment'),
		'active'=>$this->input->post('active')
		);
  
  		$this->db->insert('tb_membership',$data);
		//$id = $this->db->insert_id();
		
		
 	}
	
	function membership_view()
	{
    	$query = $this->db->select('*')->from('tb_membership')->get();
    	return $query->result();
	}
	function single_view($id)
	{		
		$this->load->database();
		$this->db->where('id', $id);
		return $this->db->get('tb_membership');
	}
	
	function get($id)
	{
		$this->load->database();
		$this->db->where('id',$id);
		$query = $this->db->get('tb_membership');
		return $query->row_array();
	}

	function membership_update()
 	{
  		$this->load->database();
    
		
		$data=array(
    	'membership_type'=>$this->input->post('membership_type'),
    	'membership_code'=>$this->input->post('membership_code'),
    	'annual_fees'=>$this->input->post('annual_fees'),
		'duration'=>$this->input->post('duration'),
		'days'=>$this->input->post('days'),
		'recuring_payment'=>$this->input->post('recuring_payment'),
		'active'=>$this->input->post('active')
		);
	 
			//print_r($data);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('tb_membership',$data);  
 	}

	function general()
	{
		//$data['fid']['value'] = 0;
		$data['membership_type'] = 'Membership Type';
		$data['membership_code'] = 'Membership Code';
		$data['annual_fees'] = 'Annual Fees';
		$data['duration'] = 'Duration';
		$data['days']='Days';
		$data['recuring_payment'] = 'Recuring Payment';
		$data['active']	= 'Active';
		
		
		
		//$data['forminput']  = 'Form Input';
		$data['fmembership_type'] = array('name'=>'membership_type','size'=>30);
		$data['fmembership_code']	= array('name'=>'membership_code','size'=>30);
		$data['fannual_fees']	= array('name'=>'annual_fees','size'=>30);
		$data['fduration'] = array('name'=>'duration','size'=>30);
		$data['fdays']=array('name'=>'days','size'=>'30');
		$data['frecuring_payment'] = array('name'=>'recuring_payment','size'=>30);
		$data['factive']	= array('name'=>'active','size'=>30);
		
		return $data;
	}
	
	/*function get_payment($id)
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
		
	}*/
	
	
	
   }
?>