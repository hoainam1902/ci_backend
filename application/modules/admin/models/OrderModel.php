<?php
defined('BASEPATH') OR exit('No script access allow direct');
class OrderModel extends CI_Model
{
	protected $table = 'orders';

	public function __construct()
	{
		parent::__construct();
	}

	public function getAllOrder()
	{
		$this->db->select('*')->from($this->table);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}

	public function getOrderOfUser()
	{
		$userID = $_SESSION['userInfo']['id'];
		$where = array('user_id' => $userID, 'status !=' => 77);
		$this->db->select('*')->from($this->table)->where($where);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->result_array();
		}
		return null;
	}

	public function getOrderByID($orderID)
	{
		$userID = $_SESSION['userInfo']['id'];
		$where = array('user_id' => $userID, 'id' => $orderID);
		$this->db->select('*')->from($this->table)->where($where)->limit(1);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return null;
	}

	public function update($orderID, $data)
	{
		$this->db->trans_start();
		$userID = $_SESSION['userInfo']['id'];
		$where = array('user_id' => $userID, 'id' => $orderID);
		$this->db->where($where);
		$this->db->update($this->table, $data);
		$this->db->trans_complete();        

		if($this->db->trans_status() === FALSE)
		{
			return false;
			// $this->set_flashdata('error_notify', 'Khong the chinh sua don hang.');
		}
		else
		{
			if($this->db->affected_rows() > 0)
			{
				return true;
			}
			else
			{
				$this->session->set_flashdata('success_notify', 'Thanh cong nhung khong co tac dong nao den csdl.');
				return true;
			}
		}

	}

	public function cancel($orderID)
	{
		$userID = $_SESSION['userInfo']['id'];
		$where = array('user_id' => $userID, 'id' => $orderID);
		$data = array('status' => -1);
		$this->db->trans_start();
		$this->db->where($where);
		$this->db->update($this->table, $data);
		$this->db->trans_complete();    

		if($this->db->trans_status() === FALSE)
		{
			return false;
		}
		else
		{
			if($this->db->affected_rows() > 0)
			{
				$this->session->set_flashdata('notify_success', array('Thanh cong. Da huy don hang'));
				return true;
			}
			else
			{
				$this->session->set_flashdata('notify_success', array('Don hang da huy'));
				return true;
			}
		}
	}

	public function getOrderDetails($orderID)
	{
		$userID = $_SESSION['userInfo']['id'];
		$where = array('user_id' => $userID,'id' => $orderID);
		$this->db->trans_start();
		$this->db->select('id')->from($this->table)->where($where);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$where = array('order_id' => $orderID);
			$this->db->select('*')->from('order_details')->where($where)->join('products', 'products.id = order_details.product_id');
			$query = $this->db->get();
			$result = $query->result_array();
			$this->db->trans_complete();
			return $result;
		}
		$this->db->trans_complete();
		return null;
	}

}