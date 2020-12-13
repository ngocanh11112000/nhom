<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
		$this->load->model('checkout_model');
	}

	public function index()
	{

		// thông tin địa chỉ shop
        $data['shop'] = $this->contact_model->get_all();
// mạng xã hội
		  $data['mangxh']= $this->contact_model->mangxh();
		$this->load->view('pages/header',$data);
		$this->load->view('pages/checkout',$data);
		 $this->load->view('pages/footer',$data);

	}
	
}

/* End of file Checkout.php */
/* Location: ./application/controllers/Checkout.php */