<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class checkout_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();


		
	}
	 

	 //xử  lý sau khi đặt mua
	public function insert_data_function($your_data)
{
    $this->db->insert("your_table",$your_data);
    $last_id = $this->db->insert_id();
    return $last_id;
}


}

/* End of file checkout_model.php */
/* Location: ./application/models/checkout_model.php */