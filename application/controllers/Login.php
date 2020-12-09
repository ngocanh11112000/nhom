<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->model('contact_model');
    //$this->load->model('user_model');
	}


	public function index()
	{
	       
    //đăng nhập


		if($this->input->post('lo')){
          // Load the model
          $this->load->model('login_model');
          // Validate the user can login
         
          $dlieu = array(
      		'email' => $this->input->post('email'),
      		'password' => $this->input->post('password')
      		);
           $result = $this->login_model->validate($dlieu);
          // Now we verify the result
          if($result == true){


             $tbao= $this->login_model->user();


             foreach ($tbao as $row)
                     if ($dlieu['email']==$row->email ) {
                           //Lưu tên đăng nhập
                           $_SESSION['tb'] = $row->lastname;
                    
                    }

         header("Location:http://localhost/hihi/index.php/home ");
           
              }else{
       
              // If user did not validate, then show them login page again

    header("Location:http://localhost/hihi/index.php/login ");  
          }}   

    // phần thông tin shop như địa chỉ số điện thoại
          $dt['shop'] = $this->contact_model->get_all();

           
          $this->load->view('pages/header',$dt);
           $this->load->view('pages/login',$dt);
            $this->load->view('pages/footer',$dt);

          	}

    
          
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */