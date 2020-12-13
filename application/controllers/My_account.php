<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('contact_model');

		$this->load->model('login_model');
		$this->load->model('my_account_model');
	}

	public function index()
	{
		
// xử lý cập nhật(sửa) thông tin người dùng	


			    if ( $this->input->post('upda') ){
			    $this->my_account_model->up();
			
}
				if ( $this->input->post('save')) {
					$pass1=$_POST['pass1'];
					$pass2=$_POST['pass2'];

					if ($pass1==$pass2) {
					 $this->my_account_model->savePass();
					}
					else
					{
						echo "Không cập nhật được";
					}
					
				}

// phần thông tin shop như địa chỉ số điện thoại

	       		 $dt['shop'] = $this->contact_model->get_all();
			     $dt['firstname']= $this->my_account_model->firstname();
			      $dt['lastname']= $this->my_account_model->lastname();
			       $dt['email']= $this->my_account_model->email();
			        $dt['mobile']= $this->my_account_model->mobile();
			         $dt['password']= $this->my_account_model->password();
// mạng xã hội
		  $dt['mangxh']= $this->contact_model->mangxh();
			    $this->load->view('pages/header',$dt);
			    $this->load->view('pages/my-account',$dt);
			     $this->load->view('pages/footer',$dt);

 

}}

/* End of file My-accout.php */
/* Location: ./application/controllers/My-accout.php */