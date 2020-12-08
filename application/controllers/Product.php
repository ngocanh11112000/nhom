<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/product-detail');
	}
	

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */