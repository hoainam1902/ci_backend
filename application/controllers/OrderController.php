<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OrderController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		// if(!$this->PublicModels->checkLogin()) {
		// 	$message = array('warning' => 'Ban can dang nhap truoc');
		// 	$this->session->set_flashdata('message', $message);
		// 	header('Location: '. route('account.login'));
		// }
		if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
			$this->render('checkout/notify_empty_cart.php');
			return;
		}
		$this->load->library('form_validation');
		$this->load->model('OrderModel');
	}
	public function index()
	{
		if(!empty($_POST)) {
			$this->form_validation->set_rules('fullname', 'fullname', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|min_length[9]|max_length[35]');
			$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[6]|max_length[200]');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric|min_length[6]|max_length[20]');
			$this->form_validation->set_rules('note', 'note', 'trim|min_length[6]|max_length[200]');
			if ($this->form_validation->run() == TRUE) {
				$userID = isset($_SESSION['userDetails']['id']) ? $_SESSION['userDetails']['id'] : (exit('chua dang nhap'));
				$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
				$email = isset($_POST['email']) ? $_POST['email'] : '';
				$address = isset($_POST['address']) ? $_POST['address'] : '';
				$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
				$note = isset($_POST['note']) ? $_POST['note'] : '';
				$data = array('fullname' => $fullname, 'email' => $email, 'address' => $address, 'phone' => $phone, 'note' => $note);
				$this->OrderModel->createOrder($data);
			}
			$this->session->set_flashdata('error-message', $this->form_validation->error_array());
		}
		$this->render('checkout/checkout.index.php');
	} 
	

	public function saveOrder()
	{
		if(!empty($_POST)) {
			$this->form_validation->set_rules('fullname', 'fullname', 'trim|required|min_length[5]|max_length[50]');
			$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|min_length[9]|max_length[35]');
			$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[6]|max_length[200]');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|numeric|min_length[6]|max_length[20]');
			$this->form_validation->set_rules('note', 'note', 'trim|min_length[6]|max_length[200]');
			$firstName = isset($_POST['firstname']) ? $_POST['firstName'] : '';
		}
	}
}