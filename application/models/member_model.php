<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Member_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}
	function add_member()
	{
		$random_no=rand(1,999);
		$this->load->database();
		$file=$random_no.trim($_FILES['photo']['tmp_name']);
		$image_upload=$random_no.trim($_FILES['photo']['name']);
		//$image= addslashes(file_get_contents($_FILES['image_path']['tmp_name']));
		$image_name= addslashes($_FILES['photo']['name']);
		move_uploaded_file($_FILES["photo"]["tmp_name"],"assets/images/" .$image_upload);
			
	 	//$this->do_upload();
	 	$check = $this->input->post('recuring_payments',TRUE);
	 		if(empty($check))
	 		{
	 			$recuring_payments= 'Yes';
	 		}
	 		else
	 		{
	 			$recuring_payments= 'No';
	 		}
			
		$data=array(
    	'first_name'=>$this->input->post('first_name'),
    	'last_name'=>$this->input->post('last_name'),
    	'email'=>$this->input->post('email'),
		'password'=>$this->input->post('password'),
	 	'phone'=>$this->input->post('phone'),
    	'street1'=>$this->input->post('street1'),
    	'street2'=>$this->input->post('street2'),
		'city'=>$this->input->post('city'),
	 	'state'=>$this->input->post('state'),
    	'zip'=>$this->input->post('zip'),
    	'membership_type'=>$this->input->post('membership_type'),
		'expired_on'=>$this->input->post('expired_on'),
		'status'=>$this->input->post('status'),
		'recuring_payments'=>$recuring_payments,
		'photo'=>$image_upload,
		);
  		//print_r($data);
  		$this->db->insert('tb_members',$data);
		$id = $this->db->insert_id();
		
		$payment=array(
		'member_id'=>$id,
    	'first_name'=>$this->input->post('first_name'),
    	'last_name'=>$this->input->post('last_name'),
    	'membership_type'=>$this->input->post('membership_type'),
		'amount'=>$this->input->post('amount'),
		'invoice'=>$this->input->post('invoice'),
		'payment_date'=>$this->input->post('payment_date'),
		'due_date'=>$this->input->post('due_date'),
		'payment_method'=>$this->input->post('payment_method'),
		'payment_status'=>$this->input->post('payment_status')
		
		);
		$this->db->insert('tb_payment',$payment);
 	}
	function add_payment()
	{
		
		$this->load->database();
		
		$data=array(
		'member_id'=>$id,
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
	function member_view()
	{
    	//$query = $this->db->select('*')->from('tb_members')->get();
		$query = $this->db->query('select tb_members.*,tb_membership.membership_type from tb_members, tb_membership where tb_members.membership_type = tb_membership.id ORDER BY `tb_members`.`id` ASC');
    	return $query->result();
	}
	function single_view($id)
	{		
		$this->load->database();
		$this->db->where('id', $id);
		return $this->db->get('tb_members');
	}
	/*function member_get_all()
	{
		$rs = $this->db->select('*')->from('tb_members')->get();
		return $rs->result();
	}*/
	function get($id)
	{
		$this->load->database();
		$this->db->where('id',$id);
		$query = $this->db->get('tb_members');
		return $query->row_array();
	}

	function member_update()
 	{
  		$this->load->database();
    
		$random_no=rand(1,999);
   		$this->load->database();
		$file=$random_no.trim($_FILES['photo']['tmp_name']);
		$image_upload=$random_no.trim($_FILES['photo']['name']);
		//$image= addslashes(file_get_contents($_FILES['image_path']['tmp_name']));
		$image_name= addslashes($_FILES['photo']['name']);
		move_uploaded_file($_FILES["photo"]["tmp_name"],"assets/images/" .$image_upload);
	
		$check = $this->input->post('recuring_payments',TRUE);
	 	if(empty($check))
	 	{
	 		$recuring_payments= 'Yes';
	 	}
		else
		{
	 		$recuring_payments= 'No';
	 	}
		$data=array(
   		'first_name'=>$this->input->post('first_name'),
    	'last_name'=>$this->input->post('last_name'),
    	'email'=>$this->input->post('email'),
		'password'=>$this->input->post('password'),
		'phone'=>$this->input->post('phone'),
    	'street1'=>$this->input->post('street1'),
    	'street2'=>$this->input->post('street2'),
		'city'=>$this->input->post('city'),
		'state'=>$this->input->post('state'),
    	'zip'=>$this->input->post('zip'),
    	'membership_type'=>$this->input->post('membership_type'),
		'expired_on'=>$this->input->post('expired_on'),
		'status'=>$this->input->post('status'),
		'recuring_payments'=>$recuring_payments,
		'photo'=>$image_upload

  		);
	 
			//print_r($data);
		$this->db->where('id',$this->input->post('id'));
		$this->db->update('tb_members',$data);  
 	}

	function general()
	{
		$data['fid']['value'] = 0;
		$data['fcity']['value'] = '';		
		$data['first_name'] = 'First Name';
		$data['last_name'] = 'Last Name';
		$data['email'] = 'Email';				
		$data['password'] = 'Password';
		$data['phone'] = 'Phone';
		$data['street1'] = 'Address';
		$data['street2'] = 'Street2';
		$data['city'] = 'City';
		$data['state'] = 'State';
		$data['zip'] = 'Zip';
		$data['membership_type'] = 'Membership Type';
		$data['expired_on'] = 'Expired On';
		$data['status']	= 'Status';
		$data['recuring_payments'] = 'Recuring Payments';
		$data['photo'] = 'Image';
		
		
		//$data['forminput']  = 'Form Input';
		$data['ffirst_name'] = array('name'=>'first_name','size'=>30);
		$data['flast_name']	= array('name'=>'last_name','size'=>30);
		$data['femail']	= array('name'=>'email','size'=>30);
		$data['fpassword'] = array('name'=>'password','size'=>30);
		$data['fphone']	= array('name'=>'phone','size'=>30);
		$data['fstreet1'] = array('name'=>'street1','size'=>30);
		$data['fstreet2'] = array('name'=>'street2','size'=>30);
		$data['fcity'] = array('name'=>'city','size'=>30);
		$data['fstate']	= array('name'=>'state','size'=>30);
		$data['fzip'] = array('name'=>'zip','size'=>30);
		$data['fmembership_type'] = array('name'=>'membership_type','size'=>30);
		$data['fexpired_on'] = array('name'=>'expired_on','size'=>30);
		$data['fstatus'] = array('name'=>'status','size'=>30);
		$data['frecuring_payments'] = array('name'=>'recuring_payments','size'=>30);
		$data['fphoto']	= array('name'=>'photo','size'=>30);
		
		
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
	
	
	/*function member_delete()
	{
		$this->db->where("id", $this->id);
		$this->db->delete("member");
	}*/
	
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
	function get_user_activate()
 	{
	 	$this->load->database();
		$query = $this->db->query('select tb_members.*,tb_membership.membership_type from tb_members, tb_membership where tb_members.membership_type = tb_membership.id AND tb_members.status = "activate" ORDER BY `tb_members`.`id` ASC');
	 	//$this->db->where("status",'activate');
     	//$query = $this->db->get('tb_members');
       	return $query->result();
 	}
 	function get_user_inactivate()
 	{
		 $this->load->database();
		 $qry = $this->db->query('select tb_members.*,tb_membership.membership_type from tb_members, tb_membership where tb_members.membership_type = tb_membership.id AND tb_members.status = "inactivate" ORDER BY `tb_members`.`id` ASC');
		 //$this->db->where("status",'inactivate');
     	 //$qry = $this->db->get('tb_members');
      	 return $qry->result();
 	}
	public function record_count() {
        return $this->db->count_all("tb_members");
    }

    public function fetch_member($limit = 4, $offset = 0) {
		$this->db->limit($limit, $offset);
        $query = $this->db->get("tb_members",$limit,$offset);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}
   }
?>