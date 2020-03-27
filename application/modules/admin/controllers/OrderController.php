<?php
defined('BASEPATH') OR exit('No script access allow direct');

class OrderController extends MY_AdminController
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('OrderModel');
	}

	public function index()
	{
		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('order');
		$this->render('order/order');
	}

	public function getAllOrder_json()
	{
		$meta = array("meta" => array("page" => 1, "pages" => 1, "perpage" => -1, "total" => 40, "sort" => "asc", "field" => "id"));
		$data = array("data" => $this->OrderModel->getAllOrder());
		header("Content-Type: application/json; charset=UTF-8");
		echo json_encode(array_merge($meta,$data), JSON_PRETTY_PRINT);
	}
}