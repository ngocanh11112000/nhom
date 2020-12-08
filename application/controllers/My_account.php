<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('pages/my-account');
	}

}

/* End of file My-accout.php */
/* Location: ./application/controllers/My-accout.php */