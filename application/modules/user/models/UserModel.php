<?php
defined('BASEPATH') OR exit('No script access allow direct');
class UserModel extends CI_Model
{
	protected $table = 'users';

	public function __construct()
	{
		parent::__construct();
	}

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
		$this->db->where('email', $_SESSION['userInfo']['email']);
		$res = $this->db->update($this->table, $data);
		if($res) {
			return true;
		}
		return false;
	}

	public function isMathOldPassword($oldPassword)
	{
		$email = $_SESSION['userInfo']['email'];
		$this->db->select('email,password')->from($this->table)->where('email', $email)->limit(1);
		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$user = $query->row();
			return password_verify($oldPassword, $user->password);
		}
		return false;
	}

	public function changePassword($newPassword)
	{
		$email = $_SESSION['userInfo']['email'];
		$newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
		$data = array('password' => $newPassword);
		$this->db->where('email', $email);
		$res = $this->db->update($this->table, $data);
		return $res;
	}

}