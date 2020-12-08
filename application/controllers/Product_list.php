<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_list extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/product-list');
	}

}

/* End of file Product-list.php */
/* Location: ./application/controllers/Product-list.php */