<?php
defined('BASEPATH') OR exit('No script access allow direct');
Class MY_DashboardController extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->checkLogin()) {
			header('Location: ' . route('user.login'));
		}
	}

	public function render($viewPath)
	{
		$this->load->view('layout/main', $viewPath);
	}

	private function checkLogin()
	{
		if(isset($_SESSION['loginInfo']) && !empty($_SESSION['loginInfo'])) {
			return true;
		}
		return false;
	}
}