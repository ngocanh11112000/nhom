<?php

class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function validate($dlieu) {

		$condition = "email =" . "'" . $dlieu['email'] . "' AND " . "password =" . "'" . $dlieu['password'] . "'";
		$this->db->select('*');
		$this->db->from('dangnhap');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
		return true;
		} else {
		return false;
		}
		}


}
?>