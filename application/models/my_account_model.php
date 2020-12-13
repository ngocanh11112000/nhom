<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class my_account_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function firstname() {
		 $st= $_SESSION['id'];

  
	$this->db->select('firstname');
		$this->db->from('dangnhap');
	   $this->db->where("stt =",$st);
		$this->db->limit(1);
		$query = $this->db->get();
	 if ($query->num_rows() == 1) {
         return $query->row()->firstname;
     }
     return false;
}
public function lastname()
{
	 $st= $_SESSION['id'];
	 $this->db->select('lastname');
		$this->db->from('dangnhap');
	   $this->db->where("stt =",$st);
		$this->db->limit(1);
		$query = $this->db->get();
		  if ($query->num_rows() == 1) {
         return $query->row()->lastname;
     }
     return false;
}

public function email()
{
	 $st= $_SESSION['id'];
	  $this->db->select('email');
		$this->db->from('dangnhap');
	   $this->db->where("stt =",$st);
		$this->db->limit(1);
		$query = $this->db->get();
	 if ($query->num_rows() == 1) {
         return $query->row()->email;
     }
     return false;

}
		
		public function mobile()
		{
			 $st= $_SESSION['id'];
			$this->db->select('mobile');
		$this->db->from('dangnhap');
	   $this->db->where("stt =",$st);
		$this->db->limit(1);
		$query = $this->db->get();
		 if ($query->num_rows() == 1) {
         return $query->row()->mobile;
     }
     return false;

		}


public function password()
{
	 $st= $_SESSION['id'];
	 $this->db->select('password');
		$this->db->from('dangnhap');
	   $this->db->where("stt =",$st);
		$this->db->limit(1);
		$query = $this->db->get();

     if ($query->num_rows() == 1) {
         return $query->row()->password;
     }
     return false;

}



	
    

// update

public function up()
{
	    $st= $_SESSION['id'];

		 $u = array(
          	'firstname' => $_POST['firstname'],
      		'lastname' =>   $_POST['lastname'],
			'mobile' =>  $_POST['mobile'],
      		'email' => $_POST['email'],
        	'password' => $this->input->post('password')
      		);
		 $this->db->where('stt', $st);
		$this->db->update('dangnhap', $u);
		  $_SESSION['tb'] =  $_POST['lastname'];
	return true;

}
public function savePass()
{
  $st= $_SESSION['id'];
	 $p = array(
          	'password' => $_POST['pass1']);
	    $this->db->where('stt', $st);
		$this->db->update('dangnhap', $p);

}



}

/* End of file my_account_model.php */
/* Location: ./application/models/my_account_model.php */