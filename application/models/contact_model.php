<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	 public function get_all() {
      $query = $this->db->query('SELECT * FROM thongtinshop');
      return $query->result();
    }
}

/* End of file contact_view.php */
/* Location: ./application/models/contact_view.php */