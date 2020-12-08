<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/cart');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */