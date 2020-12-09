<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	session_start(); 
 
		if (isset($_SESSION['tb'])){
		    unset($_SESSION['tb']);
		     // xóa session login
		    // $_SESSION['tb']="User";
		}
		header("Location: http://localhost/hihi/index.php/Home");

	}

}

/* End of file Logout.php */
/* Location: ./application/controllers/Logout.php */