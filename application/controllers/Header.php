<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Header extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('header_model');

	}

	public function index()
	{

		

		  $data['qu'] = $this->header_model->get_all();
		  
		$this->load->view('pages/header',$data);
	}

}

/* End of file Header.php */
/* Location: ./application/controllers/Header.php */