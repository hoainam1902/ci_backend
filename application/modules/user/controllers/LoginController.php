<?php
defined('BASEPATH') OR exit('No script access allow direct');
class LoginController extends MX_Controller
{
	private $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->data['view'] = 'login';
		$this->data['data'] = array();
		$this->data['settings']['enable_part_menu'] = false;
		$this->data['settings']['enable_part_footer'] = false;
		$this->load->model('LoginModel');
		$this->load->model('Publicmodels');
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		if($this->Publicmodels->isLogin()) {
			header('Location:' . base_url());
			exit();
		}
		if(!empty($_POST)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|min_length[9]|max_length[35]');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]|max_length[30]');
			if ($this->form_validation->run() == TRUE) {
				$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL, FILTER_NULL_ON_FAILURE);
				$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE);
				$this->LoginModel->doLogin(array('email' => $email, 'password' => $password));
				if($this->Publicmodels->isLogin())
					header('Location:' . base_url());
			}
			$this->data['invalid'] = $this->form_validation->error_array();
		} 
		if(!$this->Publicmodels->isLogin()) {
			$this->load->view('login', $this->data);
		}
		
	}

	public function logout()
	{	
		unset($_SESSION['userInfo']);
		header('Location:' . route('user.login'));
	}
}
