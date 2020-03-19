<?php
defined('BASEPATH') OR exit('No script access allow direct');
class OrderController extends MY_DashboardController
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('OrderModel');
	}

	public function index()
	{
		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('order');
		$this->data['dataHead'] = array('<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">');
		$this->data['dataBody']['listOrder'] = $this->OrderModel->getOrderOfUser();
		$this->render('order');
	}

	public function edit($id)
	{
		if(isset($_POST)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('fullname', 'fullname', 'trim|required|min_length[6]|max_length[140]');
			$this->form_validation->set_rules('phone', 'phone', 'trim|required|min_length[9]|max_length[20]');
			$this->form_validation->set_rules('address', 'address', 'trim|required|min_length[9]|max_length[190]');
			if($this->form_validation->run() == TRUE) {
				$data = array('fullname' => $_POST['fullname'], 'phone' => $_POST['phone'], 'address' => $_POST['address'], 'note' => $_POST['note']);
				$res = $this->OrderModel->update($id, $data);
				if($res) {
					$this->session->set_flashdata('notify_success', array('Da thuc hien thay doi'));
				} else {
					$this->session->set_flashdata('notify_error', array('Co loi xay ra. update data error'));
				}
				header('Location:' . route('dashboard.order.edit/' . $id));
			} else {
				$this->data['errors'] = $this->form_validation->error_array();
			}
		}
		$this->data['order'] = $this->OrderModel->getOrderByID($id);
		$this->data['breadcrumbs'] = $this->dashboardbreadcrumbs->render('edit-order');
		$this->render('order/edit/edit');
	}

	public function cancel($id)
	{
		$this->OrderModel->cancel($id);
		header('Location:' . route('dashboard.order'));
	}

	public function showDetails()
	{
		if(isset($_POST['orderID'])) {
			$orderID = $_POST['orderID'];
			echo json_encode($this->OrderModel->getOrderDetails($orderID));
		}
	}
}