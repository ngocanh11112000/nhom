<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Footer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

	public function index()
	{
		   $data['shop'] = $this->contact_model->get_all();

		   	$this->load->view('pages/footer',$data);
	}

	

}

/* End of file Footer.php */
/* Location: ./application/controllers/Footer.php */