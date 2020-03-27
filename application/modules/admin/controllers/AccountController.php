<?php
defined('BASEPATH') OR exit('No script access allow direct');

class AccountController extends MY_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$this->myAccount();
	}

	public function myAccount()
	{
		$adminInfo = $this->UserModel->getMyAccount();
		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('profile');
		$this->data['adminInfo'] = $adminInfo;
		$this->render('account_info/account-info');
	}

	public function updateProfile()
	{
		if(isset($_POST) && !empty($_POST)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'fullname', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[10]|max_length[190]');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|integer|min_length[9]|max_length[15]');
			// $this->form_validation->set_rules('avatarfile', 'file', 'trim|xss_clean');
			if($this->form_validation->run() == TRUE) {
				$email = $_POST['email'];
				$password = password_hash($_POST['password']);
				$config['upload_path'] = './uploads/admin/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = 2000;
				$config['max_width'] = 2000;
				$config['max_height'] = 2000;
				$config['file_name'] = $_SESSION['adminInfo']['id'] . $_SESSION['adminInfo']['fullname'];
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload('avatarfile')) {
					$upload_data = $this->upload->data();
					$res = $this->UserModel->updateProfile(array('fullname' => $_POST['fullname'], 'address' => $_POST['address'], 'phone' => $_POST['phone'], 'avatar' => $upload_data['file_name']));
				} else {
					$res = $this->UserModel->updateProfile(array('fullname' => $_POST['fullname'], 'address' => $_POST['address'], 'phone' => $_POST['phone']));
				}
				if($res) {
					$this->session->set_flashdata('notify_success', array('Da thuc hien thay doi'));
				} else {
					$this->session->set_flashdata('notify_error', array('Co loi xay ra. update data error'));
				}
				header('Location: ' . route('admin.my-account'));
			} else {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->myAccount();
			}
		}
	}

	public function showChangePassword()
	{
		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('change_password');
		$this->data['title'] = 'Thay doi mat khau';
		$this->render('change_password/change-password');
	}

	public function doChangePassword()
	{
		if(isset($_POST)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('current-password', 'current-password', 'trim|required|min_length[6]|max_length[170]');
			$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]|max_length[170]');
			$this->form_validation->set_rules('re-password', 're-password', 'trim|required|min_length[8]|max_length[170]|matches[password]');
			if($this->form_validation->run() == TRUE) {
				$res = $this->UserModel->isMathOldPassword($_POST['current-password']);
				if($res) {
					$newPassword = $_POST['password'];
					if($this->UserModel->changePassword($_POST['re-password'])) {
						$this->session->set_flashdata('notify_success',array('Thay doi mat khau thanh cong'));
					} else {
						$this->session->set_flashdata('notify_error',array('Loi. Khong the thay doi mat khau !!!'));
					}
				} else {
					$this->session->set_flashdata('notify_error',array('Mat khau hien tai khong dung.'));
				}
				header('Location:' . route('admin.change-password'));
			} else {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->showChangePassword();
			}
		}
	}

	public function showTableUser()
	{
		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('users_manager');
		$this->data['title'] = 'Quan ly thanh vien';
		$this->render('users/users');
	}

	public function apiGetAllUsers()
	{
		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode($this->UserModel->getAllUsers(), JSON_PRETTY_PRINT);
	}

}