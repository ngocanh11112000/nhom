<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
	}

	public function index()
	{
		 // phần thông tin shop như địa chỉ số điện thoại
    $dt['shop'] = $this->contact_model->get_all();

    $this->load->view('pages/header',$dt);
    $this->load->view('pages/my-account',$dt);
     $this->load->view('pages/footer',$dt);
	}

}

/* End of file My-accout.php */
/* Location: ./application/controllers/My-accout.php */