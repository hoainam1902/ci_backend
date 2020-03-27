<?php
defined('BASEPATH') OR exit('No script access allow direct');
class AdminLoginController extends MX_Controller
{
	private $data = array();

	public function __construct()
	{
		parent::__construct();
		$this->data['view'] = 'login';
		$this->data['data'] = array();
		$this->data['settings']['enable_part_menu'] = false;
		$this->data['settings']['enable_part_footer'] = false;
		$this->load->model('PublicAdminModel');
	}

	public function index()
	{
		$this->login();
	}

	public function login()
	{
		if($this->PublicAdminModel->isLogin()) {
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
				$this->doLogin(array('email' => $email, 'password' => $password));
				if($this->PublicAdminModel->isLogin()) {
					header('Location:' . base_url());
				} else {
					$this->session->set_flashdata('notify_error', array('Tai khoan hoac mat khau khong dung.'));
					header('Location:' . route('admin.login'));
				}
			}
			$this->data['invalid'] = $this->form_validation->error_array();
		} 
		$this->load->view('login/login', $this->data);
	}

	public function logout()
	{	
		unset($_SESSION['adminInfo']);
		header('Location:' . route('admin.login'));
	}

	private function doLogin($data)
	{
		$where = array('email' => $data['email'], 'isActive' => 1, 'role_id' => 1);
		$this->db->select('*')->from('users')->where($where)->limit(1);
		$query = $this->db->get();
		$admin = $query->row_array();
		if(!empty($admin) && password_verify($data['password'], $admin['password'])) {
			$this->session->set_userdata('adminInfo', $admin);
			return true;
		}
		return false;
	}
}
