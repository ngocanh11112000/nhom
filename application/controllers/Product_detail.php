<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_detail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/Product-detail');
	}

}

/* End of file Product-detail.php */
/* Location: ./application/controllers/Product-detail.php */