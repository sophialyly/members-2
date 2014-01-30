<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Invoice_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	function add_invoice()
	{
		
		$data=array(
		'invoiceID'=>$this->input->post('invoiceID'),
    	'first_name'=>$this->input->post('first_name'),
    	'last_name'=>$this->input->post('last_name'),
    	'date_issued'=>$this->input->post('date_issued'),
    	'membership_type'=>$this->input->post('membership_type'),
		'end_date'=>$this->input->post('end_date'),
		'amount'=>$this->input->post('amount'),
		'status'=>$this->input->post('status')
		);
  
  		$this->db->insert('tb_invoice',$data);
		//$id = $this->db->insert_id();
 	}

	function invoice_view()
	{
    	//$query = $this->db->select('*')->from('tb_invoice')->get();
		$query = $this->db->query('select tb_invoice.*,tb_membership.membership_type from tb_invoice, tb_membership where tb_invoice.membership_type = tb_membership.id ORDER BY `tb_invoice`.`id` ASC');
    	return $query->result();
	}
	function single_view($id)
	{		
		$this->load->database();
		$this->db->where('id', $id);
		return $this->db->get('tb_invoice');
	}
	
	function get($id)
	{
		$this->load->database();
		$this->db->where('id',$id);
		$query = $this->db->get('tb_invoice');
		return $query->row_array();
	}

	function invoice_update()
 	{
  		$this->load->database();
		$data=array(
		'invoiceID'=>$this->input->post('invoiceID'),
    	'first_name'=>$this->input->post('first_name'),
    	'last_name'=>$this->input->post('last_name'),
    	'date_issued'=>$this->input->post('date_issued'),
    	'membership_type'=>$this->input->post('membership_type'),
		'end_date'=>$this->input->post('end_date'),
		'amount'=>$this->input->post('amount'),
		'status'=>$this->input->post('status')
		
		);
			//print_r($data);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('tb_invoice',$data);  
 	}

	function general()
	{
		
		$data['finvoiceID']['value'] = 'Invoice ID';		
		$data['first_name'] = 'First Name';
		$data['last_name'] = 'Last Name';
		$data['date_issued'] = 'Start Date';
		$data['membership_type'] = 'Membership Type';
		$data['end_date'] = 'Expired On';
		$data['amount']	= 'Amount';
		$data['status']	= 'Status';
		
		//$data['forminput']  = 'Form Input';
		$data['finvoiceID'] = array('name'=>'invoiceID','size'=>30);
		$data['ffirst_name'] = array('name'=>'first_name','size'=>30);
		$data['flast_name']	= array('name'=>'last_name','size'=>30);
		$data['fdate_issued'] = array('name'=>'date_issued','size'=>30);
		$data['fmembership_type'] = array('name'=>'membership_type','size'=>30);
		$data['fend_date'] = array('name'=>'end_date','size'=>30);
		$data['famount'] = array('name'=>'amount','size'=>30);
		$data['fstatus'] = array('name'=>'status','size'=>30);
		
		return $data;
	}
	
	function get_membership_type()
	{
		$this->load->database();
		$this->db->from('tb_membership');
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
	function add_invoice_payment($id)
	{		
		$this->load->database();
		$this->db->where('id', $id);
		return $this->db->get('tb_invoice');
	}
   }
?>