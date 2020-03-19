<?php
defined('BASEPATH') OR exit('No script access allow direct');
class DashboardController extends MY_UserController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('dashboard');
	}
}