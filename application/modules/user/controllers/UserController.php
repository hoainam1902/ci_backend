<?php
defined('BASEPATH') OR exit('No script access allow direct');
class UserController extends MY_DashboardController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$this->load->view('user');
	}

	public function personalInfo()
	{
		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('personal_info');
		$this->data['title'] = 'Thong tin tai khoan';
		$this->data['users'] = $this->UserModel->getUser();
		$this->render('personal_info/personal_infomation');
	}

	public function updateProfile()
	{
		if(isset($_POST)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'fullname', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[10]|max_length[190]');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|integer|min_length[9]|max_length[15]');
			// $this->form_validation->set_rules('avatarfile', 'file', 'trim|xss_clean');
			if($this->form_validation->run() == TRUE) {
				$config['upload_path'] = './uploads/user/';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = 2000;
				$config['max_width'] = 2000;
				$config['max_height'] = 2000;
				$config['file_name'] = $_SESSION['userInfo']['id'] . $_SESSION['userInfo']['fullname'];
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ( ! $this->upload->do_upload('avatarfile')) {
					$this->session->set_flashdata('notify_error', array('Co loi xay ra. Khong the tai anh len', $this->upload->display_errors()));
				} else {
					$upload_data = $this->upload->data();
					$res = $this->UserModel->updateProfile(array('fullname' => $_POST['fullname'], 'address' => $_POST['address'], 'phone' => $_POST['phone'], 'avatar' => $upload_data['file_name']));
					if($res) {
						$this->session->set_flashdata('notify_success', array('Da thuc hien thay doi'));
					} else {
						$this->session->set_flashdata('notify_error', array('Co loi xay ra. update data error'));
					}
				}
				header('Location: ' . route('user.profile'));
			} else {
				$this->data['errors'] = $this->form_validation->error_array();
				$this->personalInfo();
			}
		}
	}

	public function changePassword()
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
				header('Location:' . route('user.change-password'));
			} else {
				$this->data['errors'] = $this->form_validation->error_array();
			}
		}

		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('change_password');
		$this->data['title'] = 'Thay doi mat khau';
		$this->render('change_password/change_password');
	}

}