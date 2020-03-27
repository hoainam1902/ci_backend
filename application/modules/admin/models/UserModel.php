<?php
defined('BASEPATH') OR exit('No script access allow direct');
class UserModel extends CI_Model
{
	protected $table = 'users';

	public function __construct()
	{
		parent::__construct();
	}

	public function getMyAccount()
	{
		$email = $_SESSION['adminInfo']['email'];
		$where = array('email' => $email, 'role_id' => 1);
		$this->db->select('email,address,phone,fullname,avatar')->from($this->table)->where($where)->limit(1);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return null;
	}

	public function isMathOldPassword($oldPassword)
	{
		$email = $_SESSION['adminInfo']['email'];
		$where = array('email' => $email, 'role_id' => 1);
		$this->db->select('email,password')->from($this->table)->where($where)->limit(1);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$user = $query->row();
			return password_verify($oldPassword, $user->password);
		}
		return false;
	}

	public function changePassword($newPassword)
	{
		$email = $_SESSION['adminInfo']['email'];
		$newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
		$data = array('password' => $newPassword);
		$this->db->where('email', $email);
		$this->db->update($this->table, $data);
		return $this->db->affected_rows() > 0;
	}

	public function getAllUsers()
	{
		$where = array('role_id >' => 1);
		$this->db->select(array('id', 'fullname', 'email', 'created_at', 'phone', 'address'))->from($this->table)->where($where);
		$query = $this->db->get();
		return $query->result_array();
	}

	// old method copy from user.UserModel

	public function getUser()
	{
		$email = $_SESSION['userInfo']['email'];
		$this->db->select('email,address,phone,fullname,avatar')->from($this->table)->where(array('email' => $email))->limit(1);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			return $query->row();
		}
		return array();
	}

	public function updateProfile($data)
	{
		$where = array('email' => $_SESSION['adminInfo']['email'], 'role_id' => 1);
		$this->db->where($where);
		$res = $this->db->update($this->table, $data);
		if($res) {
			return true;
		}
		return false;
	}


	

}