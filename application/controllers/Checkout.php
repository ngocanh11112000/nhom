<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/checkout');
		
	}

}

/* End of file Checkout.php */
/* Location: ./application/controllers/Checkout.php */