<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class header_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

 
  public function get_all() {
  	 $stt=1;
   $dieukien = "stt =" . "'" . $stt . "'";
		$this->db->select('*');
		$this->db->from('thongtinshop');
		$this->db->where($dieukien);
		$this->db->limit(1);
		$query = $this->db->get();
		

    }
      
}

/* End of file header-model.php */
/* Location: ./application/models/header-model.php */