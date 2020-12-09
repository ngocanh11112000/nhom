<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contact_model');
			}

	public function index()
	{
		// phần thông tin shop như địa chỉ số điện thoại
		$data['shop'] = $this->contact_model->get_all();
		 
		$this->load->view('pages/header',$data);
		$this->load->view('pages/index',$data);
		 $this->load->view('pages/footer',$data);
	}


	

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */