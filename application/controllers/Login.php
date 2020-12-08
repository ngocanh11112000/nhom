<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	    

		$msg="";
		$data[]="";




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
          if($result == TRUE){

          	// If user did validate, 
              // Send them to members area
          
            header ('Location: http://localhost/hihi/');
        
              }else{
      
              // If user did not validate, then show them login page again
            
               header ('Location: http://localhost/hihi/index.php/Login');
          
          }}   
          	
          $this->load->view('pages/login');
	  
      }
    
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */