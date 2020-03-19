<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AccountController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		// var_dump($_SESSION);
		if($this->PublicModels->checkLogin()) {
			header('Location:' . base_url());
			exit();
		}
		if(!empty($_POST)) {
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|min_length[9]|max_length[35]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[30]');
			if ($this->form_validation->run() == TRUE) {
				$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL, FILTER_NULL_ON_FAILURE);
				$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE);
				$this->PublicModels->doLogin($email, $password);
				if($this->PublicModels->checkLogin())
					header('Location:' . base_url());
			}
			$this->dataContent['errors'] = $this->form_validation->error_array();
			$this->render('login');
		} 
		if(!$this->PublicModels->checkLogin()) {
			$this->render('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata(array('isLogin', 'userDetails'));
		header('Location: '. base_url());
		// unset($_SESSION['isLogin']);
		// unset($_SESSION['userDetails']);
		// session_destroy();
	}

	public function signup()
	{
		if(!empty($_POST)) {
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|min_length[9]|max_length[35]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[30]');
			if ($this->form_validation->run() == TRUE)
			{
				$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL, FILTER_NULL_ON_FAILURE);
				$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE);
				$this->PublicModels->addUser($email, $password);
			}
			$this->dataContent['errors'] = $this->form_validation->error_array();
			// $this->session->set_flashdata('userError', $errors); 
		}
	}

	public function showAccountDetails()
	{
		if($this->PublicModels->checkLogin()) {
			
		} else {
			header('Location: '. route('account.login'))
		}
	}

	
}