<?php
defined('BASEPATH') OR exit('No script access allow direct');
class OrderModel extends CI_Model
{
	private $table = 'orders';
	public $insertID;

	public function __construct()
	{
		parent::__construct();

	}

	public function createOrder($data)
	{
		$this->db->trans_start();
		$this->db->insert($this->table, $data);
		$this->insertID = $this->db->insert_id();
		$this->addOrderDetails();
		$this->db->trans_complete();
		if ($this->db->trans_status() === FALSE)
		{
			$this->session->set_flashdata('error-message', array('Lỗi. Tạo đơn hàng thất bại'));
		} else {
			
			header('Location: ' . base_url());
		}
	}

	private function addOrderDetails()
	{
		if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $productID => $qty) {
				$tempData = array('order_id' => $this->insertID, 'product_id' => $productID, 'quantity' => $qty['qty']);
				$this->db->insert('order_details', $tempData);
			}
		}
	}

}