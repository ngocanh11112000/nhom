<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation'));
		$this->load->model('register_model'); //Tải model user_model.php
	}
	public function index()
	{
		$thongbao="";
		$data[]="";
		if($this->input->post('re')){
		 $firstname=$this->input->post('firstname');
		 $lastname=$this->input->post('lastname');
		 $password=$this->input->post('password');
		 $repassword=$this->input->post('repassword');
		 $mobile=$this->input->post('mobile');
		 $email=$this->input->post('email');
		
		if($password== $repassword)	{
		//Thêm vào database
		$result=$this->register_model->check_email($email);
		if($result==FALSE){
		$userid= $this->register_model->index();
		if($userid==true){
		
			$thongbao="<h3 style='color:blue'>thành công</h3>";}}
			else{
		 $thongbao="<h3 style='color:blue'>thất bại đã trùng email</h3>";}
		}
			else{
		 $thongbao="<h3 style='color:blue'>thất bại</h3>";}//}
	 $data['thongbao'] =$thongbao;
		}
$this->load->view('pages/register',$data,FALSE);
}}
/* End of file Register.php */
/* Location: ./application/controllers/Register.php */
/* End of file Register.php */
/* Location: ./application/controllers/Register.php */



	